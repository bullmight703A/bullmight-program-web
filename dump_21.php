<?php
require_once('../../../wp-load.php');

$post_21 = get_post(21);
echo "--- RAW DB CONTENT ---\n";
echo htmlspecialchars($post_21->post_content);
echo "\n--- AFTER the_content FILTER ---\n";
echo htmlspecialchars(apply_filters('the_content', $post_21->post_content));
