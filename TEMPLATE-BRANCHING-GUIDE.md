# Cross-Project Branching & Template Guide

This repository branch (`wimper-wp-deploy`) is currently configured as the unified deployment foundation for **WIMPER**, evolved from the original Kidazzle/Chroma Early Learning Academy architecture.

Because this theme contains a highly optimized SEO engine, Custom Post Types (Locations & Programs), and lead management plugins, **it acts as a perfect baseline template to duplicate for other friends and businesses.**

## How to Scale This Repo for New Friends / Companies

If you are helping a friend build a new site, do **not** work directly on the `wimper-wp-deploy` branch. Instead, create a clean branch specifically for them.

### Step 1: Create a New Branch
From your terminal or GitHub desktop:
```bash
git checkout wimper-wp-deploy
git pull origin wimper-wp-deploy
git checkout -b new-friend-company-deploy
git push -u origin new-friend-company-deploy
```

### Step 2: Global Search & Replace
Once on the new branch, you must strip out WIMPER and Chroma branding. Run a global search and replace in your IDE (like VS Code) across the `chroma-excellence-theme` and `chroma-plugins` folders:
*   Find: `Wimper` -> Replace: `[Friend's Company]`
*   Find: `Chroma` -> Replace: `[Friend's Company]`
*   Find: `kidazzle` -> Replace: `[friend-slug]`

### Step 3: Update the Theme Information
Open `wp-content/themes/chroma-excellence-theme/style.css` and update the template header:
```css
/*
Theme Name: [Friend's Company] Theme
Theme URI: https://github.com/bullmight703A/wimper-program-webb
Author: Robert Hill / Bull Might
Description: Custom theme with SEO engine and CPTs adapted for [Friend's Company].
Version: 1.0.0
*/
```

### Step 4: Adjust the Tailwind Color Palette
The WIMPER/Chroma theme has a hardcoded color palette. Open `tailwind.config.js` and modify the brand dictionary to match their logo colors:
```javascript
brand: {
  ink: '#333333',      
  cream: '#FFFFFF',    
  primary: '#NEW_HEX',     // Set to their primary brand color
  secondary: '#NEW_HEX',   // Set to their secondary brand color
}
```
After updating the colors, compile the assets:
```bash
npm run build
```

### Step 5: Update Automation & Forms
Look inside the `chroma-plugins` folder. Ensure the forms route to their emails, not yours.
*   Update the `chroma-tour-form` routing (or rename it to `company-lead-form`).
*   Update the endpoints if you are routing form submissions to a new GoHighLevel snapshot webhook or an n8n workflow for them.

### Step 6: Deploy
Follow the standard `README.md` instructions inside this repository to deploy the bundled theme and plugins to their live WordPress host. The SEO Cron and Schema configurations will auto-adjust based on the domains you set in their WordPress admin portal.
