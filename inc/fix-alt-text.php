<?php
// Fix missing alt text on WordPress init
add_action('init', 'wimper_fix_missing_alt_text_one_time');

function wimper_fix_missing_alt_text_one_time()
{
    // Check if we've already run this to prevent firing on every page load
    if (get_option('wimper_alt_text_fixed_v1')) {
        return;
    }

    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'post_status' => 'inherit',
        'posts_per_page' => -1,
    );

    $attachments = get_posts($args);

    foreach ($attachments as $attachment) {
        $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
        if (empty($alt)) {
            // Use the image title if alt text is empty
            $new_alt = $attachment->post_title;

            // Clean up the title (e.g. remove hyphens/underscores if they are filename-based)
            $new_alt = str_replace(array('-', '_'), ' ', $new_alt);
            $new_alt = ucwords(preg_replace('/\.([a-zA-Z]+)$/', '', $new_alt)); // remove extension

            // Fallback strategy if title is empty
            if (empty($new_alt)) {
                $new_alt = 'Wimper Program Image';
            }

            update_post_meta($attachment->ID, '_wp_attachment_image_alt', sanitize_text_field($new_alt));
        }
    }

    // Mark as done
    update_option('wimper_alt_text_fixed_v1', true);
}
