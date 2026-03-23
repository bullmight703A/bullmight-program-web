import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import axios from 'axios';
import { XMLParser } from 'fast-xml-parser';
import yargs from 'yargs/yargs';
import { hideBin } from 'yargs/helpers';
import pLimit from 'p-limit';
import * as chromeLauncher from 'chrome-launcher';
import lighthouse from 'lighthouse';
import { URL } from 'url';

// --- Configuration & CLI ---

const argv = yargs(hideBin(process.argv))
    .option('sitemap', {
        type: 'string',
        description: 'URL to the sitemap.xml',
        description: 'URL to the sitemap.xml',
    })
    .option('exclude', {
        type: 'string',
        description: 'Regex pattern to exclude URLs (e.g. "/blog/|/category/")',
        default: '/blog/|/category/|/tag/|/author/|\\?p=|/feed/|/wp-json/|/wp-admin/|/xmlrpc.php',
    })
    .option('device', {
        type: 'string',
        choices: ['mobile', 'desktop'],
        default: 'mobile',
    })
    .option('concurrency', {
        type: 'number',
        default: 3,
    })
    .option('output-dir', {
        type: 'string',
        default: 'lighthouse-out',
    })
    .option('throttling', {
        type: 'string',
        default: 'default', // 'default' uses lighthouse's applied throttling, 'none' disables it
    })
    .option('chrome-flags', {
        type: 'string',
        default: '--no-sandbox --headless',
    })
    .option('url-list', {
        type: 'string',
        description: 'Path to a text file with a list of URLs (one per line). Overrides --sitemap.',
    })
    .help()
    .argv;

const OUTPUT_DIR = path.resolve(argv['output-dir']);
const EXCLUDE_REGEX = new RegExp(argv.exclude, 'i');
const CONCURRENCY = argv.concurrency;

// --- Helpers ---

const ensureDir = (dir) => {
    if (!fs.existsSync(dir)) {
        fs.mkdirSync(dir, { recursive: true });
    }
};

const safeFilename = (url) => {
    try {
        const u = new URL(url);
        // Replace non-alphanumeric chars with _, keep structure somewhat readable
        let name = u.hostname + u.pathname.replace(/[^a-z0-9]/gi, '_');
        if (name.endsWith('_')) name = name.slice(0, -1);
        return name || 'root';
    } catch (e) {
        return 'invalid_url_' + Date.now();
    }
};

// --- Sitemap Parsing ---

const parser = new XMLParser({
    ignoreAttributes: false,
    isArray: (name, jpath) => {
        return ['sitemapindex.sitemap', 'urlset.url'].indexOf(jpath) !== -1;
    }
});

async function fetchAndParseSitemap(url, visitedString = new Set()) {
    if (visitedString.has(url)) return [];
    visitedString.add(url);

    console.log(`Fetching sitemap: ${url}`);
    try {
        const response = await axios.get(url, { timeout: 10000 });
        const xmlData = response.data;
        const parsed = parser.parse(xmlData);

        let urls = [];

        // Handle Sitemap Index
        if (parsed.sitemapindex && parsed.sitemapindex.sitemap) {
            const sitemaps = Array.isArray(parsed.sitemapindex.sitemap)
                ? parsed.sitemapindex.sitemap
                : [parsed.sitemapindex.sitemap];

            for (const sitemap of sitemaps) {
                if (sitemap.loc) {
                    const childUrls = await fetchAndParseSitemap(sitemap.loc, visitedString);
                    urls = urls.concat(childUrls);
                }
            }
        }
        // Handle URL Set
        else if (parsed.urlset && parsed.urlset.url) {
            const urlEntries = Array.isArray(parsed.urlset.url)
                ? parsed.urlset.url
                : [parsed.urlset.url];

            for (const entry of urlEntries) {
                if (entry.loc) {
                    urls.push(entry.loc.trim());
                }
            }
        }

        return urls;
    } catch (err) {
        console.error(`Failed to fetch/parse sitemap ${url}:`, err.message);
        return [];
    }
}

// --- Lighthouse Runner ---

async function runLighthouse(url, chrome, config) {
    const options = {
        logLevel: 'error',
        output: 'json',
        onlyCategories: ['performance', 'accessibility', 'best-practices', 'seo'],
        port: chrome.port,
    };

    const runnerResult = await lighthouse(url, options, config);
    return runnerResult;
}

// --- Main Logic ---

async function main() {
    console.log('Starting Lighthouse Automation...');

    ensureDir(OUTPUT_DIR);
    ensureDir(path.join(OUTPUT_DIR, 'reports'));

    // 1. Discover URLs
    let targetUrls = [];

    if (argv['url-list']) {
        console.log(`Reading URLs from file: ${argv['url-list']}`);
        const content = fs.readFileSync(argv['url-list'], 'utf-8');
        targetUrls = content.split('\n').map(u => u.trim()).filter(u => u && !u.startsWith('#'));
        console.log(`Loaded ${targetUrls.length} URLs from file.`);
    } else {
        if (!argv.sitemap) {
            console.error('Error: You must provide either --sitemap or --url-list');
            process.exit(1);
        }
        console.log('Discovering URLs...');
        const allUrls = await fetchAndParseSitemap(argv.sitemap);
        const uniqueUrls = new Set(allUrls);
        console.log(`Found ${uniqueUrls.size} unique URLs.`);

        // 2. Filter URLs
        const excludedUrls = [];

        for (const url of uniqueUrls) {
            if (EXCLUDE_REGEX.test(url)) {
                excludedUrls.push(url);
            } else {
                targetUrls.push(url);
            }
        }

        console.log(`Excluded ${excludedUrls.length} URLs based on regex.`);
        console.log(`Targeting ${targetUrls.length} URLs for Lighthouse.`);

        fs.writeFileSync(path.join(OUTPUT_DIR, 'urls.used.txt'), targetUrls.join('\n'));
        fs.writeFileSync(path.join(OUTPUT_DIR, 'urls.excluded.txt'), excludedUrls.join('\n'));
    }

    // 3. Setup Chrome & Concurrency
    const chromeFlags = argv['chrome-flags'].split(' ');
    const chrome = await chromeLauncher.launch({ chromeFlags });

    const limit = pLimit(CONCURRENCY);
    const failures = [];
    const results = [];

    const lhConfig = {
        extends: 'lighthouse:default',
        settings: {
            formFactor: argv.device,
            throttlingMethod: argv.throttling === 'none' ? 'provided' : 'simulate',
            screenEmulation: argv.device === 'mobile' ? {
                mobile: true,
                width: 360,
                height: 800,
                deviceScaleFactor: 2.625,
                disabled: false,
            } : {
                mobile: false,
                width: 1350,
                height: 940,
                deviceScaleFactor: 1,
                disabled: false,
            },
        }
    };

    // 4. Execution Loop
    const tasks = targetUrls.map((url) => {
        return limit(async () => {
            const filenameBase = safeFilename(url);
            const jsonPath = path.join(OUTPUT_DIR, 'reports', `${filenameBase}.report.json`);
            const htmlPath = path.join(OUTPUT_DIR, 'reports', `${filenameBase}.report.html`);

            console.log(`Running Lighthouse for: ${url}`);

            try {
                // Run Lighthouse
                // We need to pass the port explicitly because we are using a shared chrome instance for better resource usage management? 
                // Actually, for better isolation, we might want to launch chrome per limit, but that's heavy.
                // Re-using a single chrome instance is tricky with concurrency if standard 'lighthouse' call doesn't handle tabs well.
                // 'lighthouse' CLI usually handles launching Chrome itself. 
                // If we use 'chrome-launcher' manually, we might need a distinct port per worker if we want true parallelism.
                // However, standard LH concurrency usually implies queueing. 
                // Let's rely on lighthouse to connect to our running chrome instance, but wait... 
                // running multiple LH runs against ONE chrome instance concurrently is NOT supported well by the protocol usually (active tab focus etc).
                // It's safer to launch a chrome instance per worker or use a queue.
                // Since we are using p-limit, we should probably launch chrome INSIDE the limit block or use a pool.
                // For simplicity and stability: launch chrome fresh for each run or keep it simple. 
                // Actually, let's close the global chrome and let LH launch its own, or manage it per task.
                // To be safe and polite: Launching chrome per task is heavier but safer for isolation.

                // Let's refine: We will NOT use the global chrome instance for concurrent runs.
                // We will let LH launch chrome or launch a specific instance per task.
                // Since we want concurrency, let's do:

                const taskChrome = await chromeLauncher.launch({ chromeFlags });
                const options = {
                    logLevel: 'error',
                    output: ['html', 'json'],
                    onlyCategories: ['performance', 'accessibility', 'best-practices', 'seo'],
                    port: taskChrome.port,
                };

                const runnerResult = await lighthouse(url, options, lhConfig);

                // Save Reports
                const reportJson = runnerResult.report[1]; // Parsing output ['html', 'json']
                const reportHtml = runnerResult.report[0];

                fs.writeFileSync(jsonPath, reportJson);
                fs.writeFileSync(htmlPath, reportHtml);

                const lhr = JSON.parse(reportJson); // Parse back for easy access or use runnerResult.lhr

                // Extract Metrics
                const metrics = {
                    url: url,
                    performance: lhr.categories.performance?.score || 0,
                    accessibility: lhr.categories.accessibility?.score || 0,
                    bestPractices: lhr.categories['best-practices']?.score || 0,
                    seo: lhr.categories.seo?.score || 0,
                    fcp: lhr.audits['first-contentful-paint']?.numericValue || 0,
                    lcp: lhr.audits['largest-contentful-paint']?.numericValue || 0,
                    tbt: lhr.audits['total-blocking-time']?.numericValue || 0,
                    cls: lhr.audits['cumulative-layout-shift']?.numericValue || 0,
                    si: lhr.audits['speed-index']?.numericValue || 0,
                    finalScreenshot: lhr.audits['final-screenshot']?.details?.data,
                    reportUrl: `./reports/${filenameBase}.report.html`
                };

                results.push(metrics);

                await taskChrome.kill();

            } catch (err) {
                console.error(`Error processing ${url}:`, err.message);
                failures.push({ url, error: err.message });
                // Try to kill chrome if it was started
            }
        });
    });

    await Promise.all(tasks);

    // Cleanup global chrome if we used it (we didn't used the global one in the loop)
    await chrome.kill();

    // 5. Generate Summary
    console.log('Generating Summary...');

    // CSV
    const csvHeaders = ['URL', 'Performance', 'Accessibility', 'BestPractices', 'SEO', 'FCP (ms)', 'LCP (ms)', 'TBT (ms)', 'CLS', 'SpeedIndex (ms)', 'Report Link'];
    const csvRows = results.map(r => [
        r.url,
        (r.performance * 100).toFixed(0),
        (r.accessibility * 100).toFixed(0),
        (r.bestPractices * 100).toFixed(0),
        (r.seo * 100).toFixed(0),
        r.fcp.toFixed(0),
        r.lcp.toFixed(0),
        r.tbt.toFixed(0),
        r.cls.toFixed(3),
        r.si.toFixed(0),
        r.reportUrl
    ].join(','));

    fs.writeFileSync(path.join(OUTPUT_DIR, 'summary.csv'), [csvHeaders.join(','), ...csvRows].join('\n'));

    // Failures CSV
    if (failures.length > 0) {
        const failCsv = failures.map(f => `${f.url},"${f.error.replace(/"/g, '""')}"`).join('\n');
        fs.writeFileSync(path.join(OUTPUT_DIR, 'failures.csv'), 'URL,Error\n' + failCsv);
    }

    // HTML Summary
    const avg = (key) => (results.reduce((a, b) => a + b[key], 0) / results.length) || 0;

    // Sort by Performance ASC (worst first)
    results.sort((a, b) => a.performance - b.performance);

    const htmlSummary = `
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Lighthouse Summary</title>
    <style>
      body { font-family: system-ui, sans-serif; padding: 20px; max-width: 1200px; margin: 0 auto; }
      table { width: 100%; border-collapse: collapse; margin-top: 20px; }
      th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
      th { background-color: #f2f2f2; }
      .score-good { color: green; font-weight: bold; }
      .score-avg { color: orange; font-weight: bold; }
      .score-poor { color: red; font-weight: bold; }
      .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 40px; }
      .stat-card { border: 1px solid #eee; padding: 15px; border-radius: 8px; background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
      .stat-val { font-size: 24px; font-weight: bold; }
      .stat-label { color: #666; font-size: 14px; }
    </style>
  </head>
  <body>
    <h1>Lighthouse Test Summary</h1>
    <p>Target: ${argv.sitemap}<br>Date: ${new Date().toLocaleString()}</p>
    
    <div class="stats-grid">
      <div class="stat-card"><div class="stat-val">${results.length}</div><div class="stat-label">Pages Tested</div></div>
      <div class="stat-card"><div class="stat-val">${(avg('performance') * 100).toFixed(0)}</div><div class="stat-label">Avg Performance</div></div>
      <div class="stat-card"><div class="stat-val">${(avg('accessibility') * 100).toFixed(0)}</div><div class="stat-label">Avg Accessibility</div></div>
      <div class="stat-card"><div class="stat-val">${(avg('seo') * 100).toFixed(0)}</div><div class="stat-label">Avg SEO</div></div>
      <div class="stat-card"><div class="stat-val">${avg('lcp').toFixed(0)}ms</div><div class="stat-label">Avg LCP</div></div>
    </div>

    <h2>Page Results (Sorted by Performance)</h2>
    <table>
      <thead>
        <tr>
          <th>URL</th>
          <th>Perf</th>
          <th>A11y</th>
          <th>Best</th>
          <th>SEO</th>
          <th>LCP</th>
          <th>CLS</th>
          <th>Report</th>
        </tr>
      </thead>
      <tbody>
        ${results.map(r => `
          <tr>
            <td><a href="${r.url}" target="_blank">${new URL(r.url).pathname}</a></td>
            <td class="${getScoreClass(r.performance)}">${(r.performance * 100).toFixed(0)}</td>
            <td class="${getScoreClass(r.accessibility)}">${(r.accessibility * 100).toFixed(0)}</td>
            <td>${(r.bestPractices * 100).toFixed(0)}</td>
            <td>${(r.seo * 100).toFixed(0)}</td>
            <td>${r.lcp.toFixed(0)}ms</td>
            <td>${r.cls.toFixed(3)}</td>
            <td><a href="${r.reportUrl}">View Report</a></td>
          </tr>
        `).join('')}
      </tbody>
    </table>
  </body>
  </html>
  `;

    fs.writeFileSync(path.join(OUTPUT_DIR, 'summary.html'), htmlSummary);
    console.log(`Done! Reports saved to ${OUTPUT_DIR}`);
}

function getScoreClass(score) {
    if (score >= 0.9) return 'score-good';
    if (score >= 0.5) return 'score-avg';
    return 'score-poor';
}

main().catch(err => {
    console.error("Fatal Error:", err);
    process.exit(1);
});
