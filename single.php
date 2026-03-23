<?php
/**
 * The template for displaying all single posts
 * Added for Night Protocol SEO pages to prevent fallback to orphaned templates
 */

get_header();
?>

<main id="primary" class="site-main w-full min-h-screen">
	<?php
	while (have_posts()):
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('w-full max-w-4xl mx-auto py-32 px-4 md:px-8'); ?>>
			<div class="entry-content prose prose-lg prose-blue max-w-none">
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
