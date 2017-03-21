<?php
/**
 * Theme custom post types
 *
 * @package trestle
 */

function custom_post_name()
{
    $labels = array(
        'name' => _x('Customs', 'post type general name'),
        'singular_name' => _x('Custom', 'post type singular name'),
        'add_new' => _x('Add New', 'Custom'),
        'add_new_item' => __('Add New'),
        'edit_item' => __('Edit Custom'),
        'new_item' => __('New Custom'),
        'all_items' => __('All Customs'),
        'view_item' => __('View Custom'),
        'search_items' => __('Search Customs'),
        'not_found' => __('No Customs found'),
        'not_found_in_trash' => __('No Customs found in the Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Customs'
    );
    $args = array(
        'labels' => $labels,
        'rewrite' => array('slug' => 'custom'),
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_in_nav_menus' => false,
        'has_archive' => true,
        'hierarchical' => true,
        'supports' => array('title', 'thumbnail', 'editor'),
        //developer.wordpress.org/resource/dashicons/
        'menu_icon' => 'dashicons-carrot'
    );
    register_post_type('custom', $args);
}

add_action('init', 'custom_post_name');