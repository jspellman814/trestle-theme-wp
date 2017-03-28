<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package trestle
 */

get_header(); ?>

    <div id="content" class="content-area">
        <main class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			include(get_template_directory() . '/template-parts/content.php' );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
