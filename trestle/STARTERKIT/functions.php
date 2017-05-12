<?php
/**
 * Theme scripts and stylesheet dependencies
 * @package STARTERKIT
 */

add_action( 'wp_enqueue_scripts', 'STARTERKIT_enqueue_styles' );
function STARTERKIT_enqueue_styles() {
  wp_enqueue_style('toolkit-style', get_theme_file_uri() . '/dist/css/styles.css');

  wp_enqueue_script('toolkit-script', get_theme_file_uri() . '/dist/js/script.js', array('jquery'), '20151215', true);

}