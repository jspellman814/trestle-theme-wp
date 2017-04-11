<?php
/**
 * Template Name: Custom Page Template
 *
 * @package trestle
 */

get_header(); ?>

    <div id="content" class="content-area">
        <main class="site-main" role="main">

            <?php while (have_posts()) : the_post();
                include(get_template_directory() . '/template-parts/content-page.php');
            endwhile; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
