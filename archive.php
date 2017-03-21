<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package trestle
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            if (have_posts()) : ?>

                <header class="page-header">
                    <?php
                    the_archive_title('<h1 class="page-title">', '</h1>');
                    the_archive_description('<div class="archive-description">', '</div>');
                    ?>
                </header><!-- .page-header -->


                <svg style="display: none;">
                    <defs>
                        <symbol id="icon-facebook" aria-labelledby="title">
                            <title>Share to Facebook</title>
                            <path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/>
                        </symbol>
                    </defs>
                </svg>

                <?php

                /* Start the Loop */
                while (have_posts()) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part('template-parts/content', get_post_format());

                endwhile;

                the_posts_navigation();

            else :

                include(get_template_directory() . '/template-parts/content-none.php');

            endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
