<?php
/**
 * Theme widget initialization.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @package Stanley_Halle_Communities
 */

function trestle_widgets_init()
{
    register_sidebar( array(
        'name'          => esc_html__( 'Header: Logo', 'trestle' ),
        'id'            => 'header-logo',
        'description'   => esc_html__( 'Add widgets here.', 'trestle' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Header: Utility Menu', 'trestle' ),
        'id'            => 'header-utility-menu',
        'description'   => esc_html__( 'Add widgets here.', 'trestle' ),
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar First', 'trestle' ),
        'id'            => 'sidebar-first',
        'class'         => 'sidebar-first',
        'description'   => esc_html__( 'Add widgets here.', 'trestle' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Second', 'trestle' ),
        'id'            => 'sidebar-second',
        'class'         => 'sidebar-second',
        'description'   => esc_html__( 'Add widgets here.', 'trestle' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}


add_action('widgets_init', 'trestle_widgets_init');