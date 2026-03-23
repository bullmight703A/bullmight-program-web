<?php
/**
 * Plugin Name: WIMPER Force Flush Rewrite Rules
 * Description: Automatically flushes rewrite rules once to fix the 404 on Combo Pages.
 * Version: 1.0
 * Author: Antigravity
 */

add_action('init', function() {
    // Only flush once per day to avoid infinite loops and performance hits
    if (get_transient('wimper_force_flush_rules')) {
        return;
    }
    
    // Ensure the Combo Page Generator class is loaded
    if (class_exists('wimper_Combo_Page_Generator')) {
        flush_rewrite_rules(false); // Soft flush
        set_transient('wimper_force_flush_rules', true, DAY_IN_SECONDS);
        error_log('WIMPER RULE FLUSH: Successfully force flushed rewrite rules for Combo Pages.');
    } else {
        error_log('WIMPER RULE FLUSH: Failed. wimper_Combo_Page_Generator class not found.');
    }
}, 9999);
