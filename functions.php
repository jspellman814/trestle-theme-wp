<?php
/**
 * trestle functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package trestle
 */

if (!function_exists('trestle_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function trestle_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on trestle, use a find and replace
         * to change 'trestle' to the name of your theme in all the template files.
         */
        load_theme_textdomain('trestle', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'trestle'),
            'utility' => esc_html__('Utility', 'trestle'),
            'copyright' => esc_html__('Copyright', 'trestle'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('trestle_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }
endif;
add_action('after_setup_theme', 'trestle_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function trestle_content_width()
{
    $GLOBALS['content_width'] = apply_filters('trestle_content_width', 640);
}

add_action('after_setup_theme', 'trestle_content_width', 0);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 *********************************************
 * Custom
 *********************************************
 */

/**
 * Load custom post types.
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Load custom taxonomies.
 */
require get_template_directory() . '/inc/custom-taxonomies.php';

/**
 * Load custom widgets.
 */
require get_template_directory() . '/inc/custom-widgets.php';


/**
 * ----------------------------------------
 *  Adds sidebar name, as class, on the body
 * ----------------------------------------
 */
add_filter('body_class', 'add_sidebar_classes_to_body');
function add_sidebar_classes_to_body($classes = '')
{
    if (!is_front_page()) {
        if (is_active_sidebar('sidebar-1')) {
            $classes[] = 'sidebar-first';
        } elseif (is_active_sidebar('sidebar-2')) {
            $classes[] = 'sidebar-second';
        } elseif (is_active_sidebar('sidebar-1') && is_active_sidebar('sidebar-2')) {
            $classes[] = 'two-sidebars';
        }
    }
    return $classes;
}