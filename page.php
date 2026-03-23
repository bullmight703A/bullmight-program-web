<?php
/**
 * The template for displaying all single pages
 * Added for Night Protocol SEO pages to prevent fallback to orphaned templates
 */

get_header();
?>

<main id="primary" class="site-main w-full overflow-hidden min-h-screen">
    <?php
    while (have_posts()):
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('w-full'); ?>>
            <div class="entry-content w-full">
                <?php
                the_content();
                ?>
            </div>
        </article>
        <?php
    endwhile; // End of the loop.
    ?>
</main>

<?php
get_footer();