<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package trestle
 */

get_header(); ?>

    <section id="content" class="content-area">
        <main class="site-main" role="main">

            <?php
            if (have_posts()) : ?>

                <header class="page-header">
                    <h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'trestle'), '<span>' . get_search_query() . '</span>'); ?></h1>
                </header><!-- .page-header -->

                <?php
                /* Start the Loop */
                while (have_posts()) : the_post();

                    /**
                     * Run the loop for the search to output the results.
                     * If you want to overload this in a child theme then include a file
                     * called content-search.php and that will be used instead.
                     */
                    include(get_template_directory() . '/template-parts/content-search.php');

                endwhile;

                the_posts_navigation();

            else :

                include(get_template_directory() . '/template-parts/content-none.php');

            endif; ?>

        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_sidebar();
get_footer();
