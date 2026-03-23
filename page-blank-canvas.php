<?php
/**
 * Template Name: Blank Canvas
 * Description: A completely blank page template with no theme header, footer, or styles. Perfect for landing pages and funnels.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
while ( have_posts() ) :
    the_post();
    the_content();
endwhile;
?>
<?php wp_footer(); ?>
</body>
</html>