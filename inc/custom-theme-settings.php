<?php
/**
 * Custom functions that we use on most themes.
 *
 * @package trestle
 */

/**
 * Remove WordPress version number
 */
add_filter( 'the_generator', '__return_null' );

/**
 * Disable theme file editor
 */
if( !defined('DISALLOW_FILE_EDIT') ){
    define( 'DISALLOW_FILE_EDIT', true );
}

/**
 * Registers an editor stylesheet for the theme.
 */
add_action('admin_init', 'custom_add_editor_styles');
function custom_add_editor_styles()
{
    add_editor_style('editor-style.css');
}

/**
 * Set Yoast meta box priority as low
 **/
add_filter('wpseo_metabox_prio', 'yoasttobottom');
function yoasttobottom()
{
    return 'low';
}

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
add_filter('excerpt_more', 'trestle_excerpt_more');
function trestle_excerpt_more($more)
{
    return ' <a class="more-link" href="' . get_the_permalink() . '" rel="nofollow">MORE</a>';
}

/**
 * Check if post content is empty
 * Used in community-landing.php
 * http://blog.room34.com/archives/5360
 */
function empty_content($str)
{
    return trim(str_replace('&nbsp;', '', strip_tags($str))) == '';
}

/**
 * Auto Get Schema Type By Post Type
 *
 * https://gist.github.com/tlongren/9148513
 */
function html_tag_schema() {
    $schema = 'http://schema.org/';
    // Is single post
    if(is_single()) {
        $type = "Article";
    }
    // Is author page
    elseif( is_author() ) {
        $type = 'ProfilePage';
    }

    // Is search results page
    elseif( is_search() ) {
        $type = 'SearchResultsPage';
    }
    else {
        $type = 'WebPage';
    }
    echo 'itemscope="itemscope" itemtype="' . $schema . $type . '"';
}