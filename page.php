<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
get_sidebar();
get_footer();
