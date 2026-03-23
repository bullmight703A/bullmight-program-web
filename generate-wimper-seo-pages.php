<?php
/**
 * Template Name: WIMPER Generate SEO Virtual Pages
 * Description: Automates the creation of hyper-targeted Executive SEO Landing Pages for specific financial pain points.
 */

if (!defined('ABSPATH')) {
    require_once('../../../wp-load.php');
}

if (!current_user_can('manage_options')) {
    wp_die('Unauthorized. Elite access required.');
}

get_header();

// =======================================================
// THE WIMPER "PAIN POINT" KEYWORDS
// =======================================================
$seo_targets = array(
    'cutting-expenses-down-in-your-business' => array(
        'title' => 'Cutting Expenses Down In Your Business Without Losing Talent',
        'h1' => 'Systematically Cut Expenses Down In Your Business',
        'subheadline' => 'Leverage Section 125 frameworks to eliminate FICA tax leakage and instantly reduce overhead costs without touching payroll.',
        'seo_desc' => 'Looking for structured strategies for cutting expenses down in your business? Discover how mid-market CEOs are using WIMPER tax protocols to save $1,120+ per employee annually.'
    ),
    'keeping-money-in-your-business' => array(
        'title' => 'Keeping Money In Your Business | Corporate Capital Retention',
        'h1' => 'Are You Keeping Enough Money In Your Business?',
        'subheadline' => 'FICA taxes are quietly draining your operating capital. Use our Section 125 IRS-compliant framework to recapture those funds permanently.',
        'seo_desc' => 'The definitive guide to keeping money in your business. Learn how the WIMPER protocol dramatically reduces corporate tax liability and increases net EBITDA.'
    ),
    'making-staff-healthier-and-happier' => array(
        'title' => 'Making Your Staff Healthier And Happier | Zero-Cost Benefit Upgrades',
        'h1' => 'Making Your Staff Healthier And Happier',
        'subheadline' => 'Instantly upgrade your employee benefits package to include 24/7 Virtual Primary Care and Mental Health—at zero net-cost to your company.',
        'seo_desc' => 'Discover the elite corporate strategy for making your staff healthier and happier while actually saving your business money on FICA taxes.'
    ),
    'reducing-payroll-overhead' => array(
        'title' => 'How To Reduce Corporate Payroll Overhead',
        'h1' => 'Reduce Your Payroll Overhead Instantly',
        'subheadline' => 'Stop overpaying the IRS. Restructure your payroll taxes legally to lower overhead and simultaneously offer better medical coverage.',
        'seo_desc' => 'Struggling with high employee costs? See how 200+ companies are reducing payroll overhead dramatically utilizing Section 125 compliance frameworks.'
    )
);

echo '<div class="wrap" style="padding: 40px; background: #0b1120; color: white; min-height: 100vh;">';
echo '<h1 style="color: #3b82f6; font-size: 2rem;">WIMPER Virtual Page Generator Executed</h1>';

foreach ($seo_targets as $slug => $data) {
    echo "<hr style='border-color: #1e293b; margin: 20px 0;'><h3>Processing: {$data['title']}</h3>";

    $existing_page = get_page_by_path($slug, OBJECT, 'page');

    $post_data = array(
        'post_title'   => $data['title'],
        'post_name'    => $slug,
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'post_author'  => get_current_user_id(),
        // We set the page template to the SPA home so the user gets the identical massive, high-converting funnel, but the Yoast SEO headers will change!
        'page_template'=> 'template-spa-home.php' 
    );

    if ($existing_page) {
        $post_data['ID'] = $existing_page->ID;
        $post_id = wp_update_post($post_data);
        echo "<span style='color: #10b981;'>✓ Updated Virtual Page: {$slug} (ID: $post_id)</span><br>";
    } else {
        $post_id = wp_insert_post($post_data);
        echo "<span style='color: #3b82f6;'>✓ Created Virtual Page: {$slug} (ID: $post_id)</span><br>";
    }

    if (is_wp_error($post_id)) {
        echo "<span style='color: red;'>Error: " . $post_id->get_error_message() . "</span><br>";
        continue;
    }

    // Inject Custom SEO Meta Data
    update_post_meta($post_id, '_yoast_wpseo_title', $data['title']);
    update_post_meta($post_id, '_yoast_wpseo_metadesc', $data['seo_desc']);
    update_post_meta($post_id, 'wimper_dynamic_h1', $data['h1']);
    update_post_meta($post_id, 'wimper_dynamic_sub', $data['subheadline']);
}

echo '<br><br><div style="background: rgba(16, 185, 129, 0.1); border: 1px solid #10b981; padding: 20px; border-radius: 12px; color: #10b981; font-weight: bold;">Mission Accomplished! All SEO Combo Pages are generated and successfully live in the Database! Once Google crawls the sitemap, these will dominate search results!</div>';
echo '</div>';

get_footer();
