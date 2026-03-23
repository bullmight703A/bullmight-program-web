
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import * as chromeLauncher from 'chrome-launcher';
import lighthouse from 'lighthouse';
import yargs from 'yargs/yargs';
import { hideBin } from 'yargs/helpers';

const argv = yargs(hideBin(process.argv))
    .option('url', {
        type: 'string',
        demandOption: true,
        description: 'URL to test'
    })
    .option('device', {
        type: 'string',
        choices: ['mobile', 'desktop'],
        default: 'mobile',
    })
    .option('headless', {
        type: 'boolean',
        default: true
    })
    .argv;

const OUTPUT_DIR = 'lighthouse-out/single';
if (!fs.existsSync(OUTPUT_DIR)) fs.mkdirSync(OUTPUT_DIR, { recursive: true });

async function run() {
    console.log(`Testing ${argv.url} on ${argv.device}...`);

    const chromeFlags = [
        '--no-sandbox',
        argv.headless ? '--headless' : '',
        '--disable-gpu' // often helps on windows
    ].filter(Boolean);

    const chrome = await chromeLauncher.launch({ chromeFlags });

    const config = {
        extends: 'lighthouse:default',
        settings: {
            formFactor: argv.device,
            throttlingMethod: 'simulate', // Standard LH behavior
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
            onlyCategories: ['performance', 'accessibility', 'best-practices', 'seo'],
        }
    };

    const options = {
        logLevel: 'info',
        output: 'html',
        port: chrome.port,
    };

    try {
        const runnerResult = await lighthouse(argv.url, options, config);
        const reportHtml = runnerResult.report;
        const lhr = runnerResult.lhr;

        const safeName = argv.url.replace(/[^a-z0-9]/gi, '_');
        const reportPath = path.join(OUTPUT_DIR, `${safeName}.html`);
        fs.writeFileSync(reportPath, reportHtml);

        console.log('\n--------------------------------------------------');
        console.log(`Report Saved: ${reportPath}`);
        console.log('--------------------------------------------------');
        console.log(`Performance:    ${lhr.categories.performance.score * 100}`);
        console.log(`Accessibility:  ${lhr.categories.accessibility.score * 100}`);
        console.log(`Best Practices: ${lhr.categories['best-practices'].score * 100}`);
        console.log(`SEO:            ${lhr.categories.seo.score * 100}`);
        console.log('--------------------------------------------------');
        console.log(`FCP: ${lhr.audits['first-contentful-paint'].displayValue}`);
        console.log(`LCP: ${lhr.audits['largest-contentful-paint'].displayValue}`);
        console.log(`CLS: ${lhr.audits['cumulative-layout-shift'].displayValue}`);
        console.log(`TBT: ${lhr.audits['total-blocking-time'].displayValue}`);
        console.log('--------------------------------------------------');

    } catch (err) {
        console.error('Lighthouse failed:', err);
    } finally {
        await chrome.kill();
    }
}

run();
