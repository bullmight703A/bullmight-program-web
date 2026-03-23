
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const REPORTS_DIR = path.resolve('lighthouse-out/reports');
const OUTPUT_DIR = path.resolve('lighthouse-out');

if (!fs.existsSync(REPORTS_DIR)) {
    console.error("No reports directory found.");
    process.exit(1);
}

const files = fs.readdirSync(REPORTS_DIR).filter(f => f.endsWith('.report.json'));
const results = [];

console.log(`Found ${files.length} reports.`);

for (const file of files) {
    try {
        const content = fs.readFileSync(path.join(REPORTS_DIR, file), 'utf-8');
        const lhr = JSON.parse(content);

        results.push({
            url: lhr.finalUrl,
            performance: lhr.categories.performance?.score || 0,
            accessibility: lhr.categories.accessibility?.score || 0,
            bestPractices: lhr.categories['best-practices']?.score || 0,
            seo: lhr.categories.seo?.score || 0,
            fcp: lhr.audits['first-contentful-paint']?.numericValue || 0,
            lcp: lhr.audits['largest-contentful-paint']?.numericValue || 0,
            tbt: lhr.audits['total-blocking-time']?.numericValue || 0,
            cls: lhr.audits['cumulative-layout-shift']?.numericValue || 0,
            si: lhr.audits['speed-index']?.numericValue || 0,
            reportUrl: `./reports/${file.replace('.json', '.html')}`
        });
    } catch (e) {
        console.error(`Error parsing ${file}:`, e.message);
    }
}

// Generate CSV
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

// Generate HTML
results.sort((a, b) => a.performance - b.performance);
const avg = (key) => (results.reduce((a, b) => a + b[key], 0) / results.length) || 0;

function getScoreClass(score) {
    if (score >= 0.9) return 'score-good';
    if (score >= 0.5) return 'score-avg';
    return 'score-poor';
}

const htmlSummary = `
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lighthouse Summary (Partial)</title>
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
  <p>Generated from ${results.length} reports.<br>Date: ${new Date().toLocaleString()}</p>
  
  <div class="stats-grid">
    <div class="stat-card"><div class="stat-val">${results.length}</div><div class="stat-label">Pages Tested</div></div>
    <div class="stat-card"><div class="stat-val">${(avg('performance') * 100).toFixed(0)}</div><div class="stat-label">Avg Performance</div></div>
    <div class="stat-card"><div class="stat-val">${(avg('accessibility') * 100).toFixed(0)}</div><div class="stat-label">Avg Accessibility</div></div>
    <div class="stat-card"><div class="stat-val">${(avg('seo') * 100).toFixed(0)}</div><div class="stat-label">Avg SEO</div></div>
    <div class="stat-card"><div class="stat-val">${avg('lcp').toFixed(0)}ms</div><div class="stat-label">Avg LCP</div></div>
  </div>

  <h2>Page Results</h2>
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
console.log(`Summary generated at ${path.join(OUTPUT_DIR, 'summary.html')}`);
