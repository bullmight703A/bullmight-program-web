<?php
require_once('wp-load.php');

// Output raw combo data directly to check if the DB has been wiped or rules flushed
echo "=== WIMPER COMBO PAGES CHECK ===\n";

$programs = get_posts(['post_type' => 'program', 'posts_per_page' => -1]);
echo "Found " . count($programs) . " Programs.\n";

$cities = get_posts(['post_type' => 'city', 'posts_per_page' => -1, 'post_status' => 'publish']);
echo "Found " . count($cities) . " Cities.\n";

$manual = get_option('wimper_seo_manual_cities', []);
echo "Found " . count($manual) . " Manual Cities.\n\n";

if (class_exists('wimper_Combo_Page_Generator')) {
    $combos = wimper_Combo_Page_Generator::get_all_combos();
    echo "Total Generated Combo Links: " . count($combos) . "\n";
    if (count($combos) > 0) {
        echo "Sample URL: " . $combos[0]['url'] . "\n";
    }
} else {
    echo "ERROR: wimper_Combo_Page_Generator class not found!\n";
}
