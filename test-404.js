const https = require('https');
const url = 'https://n13jwn1zon.wpdns.site/financial-services/atlanta/';

https.get(url, (res) => {
    console.log(`STATUS: ${res.statusCode}`);
    if (res.statusCode === 200) {
        console.log("Combo Pages are ACTIVE and rendering!");
    } else {
        console.log("Still receiving 404 or redirect. Rewrite rules may still be stuck.");
    }
}).on('error', (e) => {
    console.error(`Fetch error: ${e.message}`);
});
