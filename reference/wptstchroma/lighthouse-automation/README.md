# Lighthouse Automation Toolkit

Automated Lighthouse testing directly from an XML sitemap.

## Features
- **Sitemap Discovery**: Recursively fetches URLs from `sitemap.xml` and sitemap indexes.
- **Smart Filtering**: Excludes blogs, authors, tags, and specific regex patterns.
- **Detailed Reports**: JSON and HTML Lighthouse reports for every page.
- **Summary Dashboard**: Consolidated HTML/CSV summaries with key metrics (Performance, LCP, CLS, etc.).
- **Concurrency**: Fast execution with configurable concurrency.

## Prerequisites
- Node.js (v18+ recommended)
- Chrome installed (The script uses `chrome-launcher` which attempts to find your local Chrome installation).

## Installation
1. Navigate to this directory:
   ```bash
   cd lighthouse-automation
   ```
2. Install dependencies:
   ```bash
   npm install
   ```

## Usage

### Basic Run
Run against a sitemap (default mobile, concurrency 3):
```bash
node run-lighthouse-from-sitemap.mjs --sitemap https://stockbridgedaycare.com/sitemap.xml
```

### Advanced Options
```bash
node run-lighthouse-from-sitemap.mjs \
  --sitemap https://stockbridgedaycare.com/sitemap.xml \
  --exclude "/blog/|/news/" \
  --device desktop \
  --concurrency 5 \
  --output-dir my-report
```

### Flags
- `--sitemap`: (Required) URL to the XML sitemap.
- `--exclude`: Regex pattern to skip URLs. Default: `/blog/|/category/|/tag/|/author/|\\?p=|/feed/`
- `--device`: `mobile` (default) or `desktop`.
- `--concurrency`: Number of parallel tabs/runs (default 3).
- `--throttling`: `default` (simulated 4G) or `none` (fast as possible).
- `--output-dir`: Folder to save results (default `lighthouse-out`).

## Output
Everything is saved to `--output-dir`:
- `summary.html`: Best way to view results.
- `summary.csv`: Raw data for Excel/Sheets.
- `failures.csv`: URLs that crashed or failed.
- `reports/`: Individual JSON/HTML files.

## Troubleshooting
- **Chrome not found**: Ensure Chrome is installed. You can set `CHROME_PATH` env var.
- **Memory issues**: Reduce `--concurrency`.
- **Bot blocking**: Some servers block headless Chrome. Try using `--chrome-flags="--no-sandbox --headless=new"`.
