<?php
/**
 * Theme custom taxonomies.
 *
 * @package trestle
 */

add_action('init', 'create_state_taxonomy', 0);

function create_state_taxonomy() {

    $labels = array(
        'name'                       => _x( 'State', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'State', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'States', 'text_domain' ),
        'all_items'                  => __( 'All States', 'text_domain' ),
        'new_item_name'              => __( 'New State Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New State', 'text_domain' ),
        'edit_item'                  => __( 'Edit State', 'text_domain' ),
        'update_item'                => __( 'Update State', 'text_domain' ),
        'view_item'                  => __( 'View State', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate states with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove states', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used states', 'text_domain' ),
        'search_items'               => __( 'Search States', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No items', 'text_domain' ),
        'items_list'                 => __( 'States list', 'text_domain' ),
        'items_list_navigation'      => __( 'States list navigation', 'text_domain' ),
        'popular_items'              => NULL,
        'parent_item'                => NULL,
        'parent_item_colon'          => NULL
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'state', array( 'custom' ), $args );
}