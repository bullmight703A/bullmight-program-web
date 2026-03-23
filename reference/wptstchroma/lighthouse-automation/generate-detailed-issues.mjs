
import fs from 'fs';
import path from 'path';

const REPORT_DIR = 'lighthouse-out/reports';
const OUTPUT_FILE_HTML = 'lighthouse-out/detailed_issues.html';
const OUTPUT_FILE_CSV = 'lighthouse-out/detailed_issues.csv';

function getScoreClass(score) {
    if (score >= 0.9) return 'pass';
    if (score >= 0.5) return 'average';
    return 'fail';
}

function formatScore(score) {
    return Math.round(score * 100);
}

function processReports() {
    if (!fs.existsSync(REPORT_DIR)) {
        console.error('Reports directory not found.');
        return;
    }

    const files = fs.readdirSync(REPORT_DIR).filter(f => f.endsWith('.json'));
    const allIssues = [];

    console.log(`Processing ${files.length} reports...`);

    const pageData = [];

    for (const file of files) {
        const content = fs.readFileSync(path.join(REPORT_DIR, file), 'utf-8');
        try {
            const lhr = JSON.parse(content);
            const url = lhr.finalUrl;

            const pageIssues = {
                url: url,
                scores: {
                    performance: lhr.categories.performance?.score || 0,
                    accessibility: lhr.categories.accessibility?.score || 0,
                    bestPractices: lhr.categories['best-practices']?.score || 0,
                    seo: lhr.categories.seo?.score || 0,
                },
                audits: []
            };

            // Iterate over categories to find relevant audits
            for (const [catId, cat] of Object.entries(lhr.categories)) {
                if (!cat.auditRefs) continue;

                for (const ref of cat.auditRefs) {
                    const audit = lhr.audits[ref.id];
                    // standard failing score is < 1. 
                    // Some informative audits have score null. We skip those unless they are 'notApplicable' false (meaning they ran) and 'scoreDisplayMode' is numeric/binary?
                    // Let's stick to score < 1 and not null for actionable issues.
                    // Also filter out 'manual' checks usually.

                    if (audit.score !== null && audit.score < 1) {
                        pageIssues.audits.push({
                            category: cat.title,
                            id: ref.id,
                            title: audit.title,
                            description: audit.description,
                            score: audit.score,
                            displayValue: audit.displayValue || ''
                        });

                        allIssues.push({
                            url,
                            category: cat.title,
                            title: audit.title,
                            score: audit.score,
                            displayValue: audit.displayValue || ''
                        });
                    }
                }
            }

            // Sort audits by score (severity)
            pageIssues.audits.sort((a, b) => a.score - b.score);
            pageData.push(pageIssues);

        } catch (e) {
            console.error(`Failed to parse ${file}: ${e.message}`);
        }
    }

    // Generate CSV
    console.log('Generating CSV...');
    const csvHeader = ['URL', 'Category', 'Issue', 'Score', 'Value'];
    const csvRows = allIssues.map(i => `"${i.url}","${i.category}","${i.title.replace(/"/g, '""')}",${i.score},"${i.displayValue}"`);
    fs.writeFileSync(OUTPUT_FILE_CSV, [csvHeader.join(','), ...csvRows].join('\n'));

    // Generate HTML
    console.log('Generating HTML...');
    let html = `
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lighthouse Issues Report</title>
        <style>
            body { font-family: system-ui, -apple-system, sans-serif; max-width: 1200px; margin: 0 auto; padding: 20px; background: #f5f5f5; }
            .page-card { background: white; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); margin-bottom: 20px; overflow: hidden; }
            .page-header { padding: 15px 20px; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center; cursor: pointer; background: #fff; }
            .page-header:hover { background: #fafafa; }
            .url { font-weight: 600; color: #2c3e50; font-size: 1.1em; text-decoration: none; }
            .scores { display: flex; gap: 10px; }
            .score-badge { padding: 4px 8px; border-radius: 4px; font-size: 0.85em; font-weight: bold; color: white; min-width: 30px; text-align: center; }
            .score-pass { background-color: #0cce6b; color: #014421; }
            .score-average { background-color: #ffa400; color: #452d00; }
            .score-fail { background-color: #ff4e42; color: #5c0e08; }
            
            .issues-list { display: none; padding: 0; margin: 0; }
            .page-card.open .issues-list { display: block; }
            
            .issue-item { padding: 12px 20px; border-bottom: 1px solid #f0f0f0; display: flex; gap: 15px; align-items: baseline; }
            .issue-item:last-child { border-bottom: none; }
            .issue-cat { font-size: 0.75em; text-transform: uppercase; letter-spacing: 0.5px; color: #666; width: 100px; flex-shrink: 0; }
            .issue-content { flex-grow: 1; }
            .issue-title { font-weight: 500; color: #333; margin-bottom: 4px; }
            .issue-value { color: #e74c3c; font-size: 0.9em; font-family: monospace; }
            
            .toggle-icon { margin-right: 10px; transition: transform 0.2s; }
            .page-card.open .toggle-icon { transform: rotate(90deg); }

            .filter-bar { margin-bottom: 20px; }
            input[type="text"] { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; }
        </style>
    </head>
    <body>
        <h1>Lighthouse Detailed Issues</h1>
         <div class="filter-bar">
            <input type="text" id="search" placeholder="Filter by URL..." onkeyup="filterPages()">
        </div>
        <div id="report-container">
    `;

    pageData.forEach((page, index) => {
        const scoreBadges = Object.entries(page.scores).map(([key, val]) => {
            const cls = getScoreClass(val);
            return `<div class="score-badge score-${cls}" title="${key}">${formatScore(val)}</div>`;
        }).join('');

        const issuesHtml = page.audits.map(issue => `
            <div class="issue-item">
                <div class="issue-cat">${issue.category}</div>
                <div class="issue-content">
                    <div class="issue-title">${issue.title}</div>
                    ${issue.displayValue ? `<div class="issue-value">${issue.displayValue}</div>` : ''}
                </div>
            </div>
        `).join('');

        html += `
            <div class="page-card" id="card-${index}">
                <div class="page-header" onclick="toggleCard(${index})">
                    <div style="display:flex; align-items:center;">
                        <span class="toggle-icon">▶</span>
                        <div>
                            <a href="${page.url}" target="_blank" class="url" onclick="event.stopPropagation()">${page.url}</a>
                            <div style="font-size:0.85em; color:#777; margin-top:4px;">${page.audits.length} Issues Found</div>
                        </div>
                    </div>
                    <div class="scores">
                        ${scoreBadges}
                    </div>
                </div>
                <div class="issues-list" id="list-${index}">
                    ${issuesHtml || '<div style="padding:20px; color:#666; font-style:italic;">No significant issues found.</div>'}
                </div>
            </div>
        `;
    });

    html += `
        </div>
        <script>
            function toggleCard(index) {
                const card = document.getElementById('card-' + index);
                card.classList.toggle('open');
            }
            function filterPages() {
                const input = document.getElementById('search');
                const filter = input.value.toLowerCase();
                const cards = document.getElementsByClassName('page-card');
                
                for (let i = 0; i < cards.length; i++) {
                    const url = cards[i].querySelector('.url').innerText;
                    if (url.toLowerCase().indexOf(filter) > -1) {
                        cards[i].style.display = "";
                    } else {
                        cards[i].style.display = "none";
                    }
                }
            }
        </script>
    </body>
    </html>
    `;

    fs.writeFileSync(OUTPUT_FILE_HTML, html);
    console.log(`Generated HTML report: ${OUTPUT_FILE_HTML}`);
}

processReports();
