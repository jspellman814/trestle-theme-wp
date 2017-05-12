<?php
/**
 * Theme scripts and stylesheet dependencies
 * @package trestle
 */

function trestle_scripts()
{
  // global scripts/styles
  wp_enqueue_style('trestle-style', get_template_directory_uri() . '/dist/css/styles.css');

  wp_enqueue_script('trestle-script', get_template_directory_uri() . '/dist/js/script.js', array('jquery'));

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  if (is_front_page()) {

  }
}

add_action('wp_enqueue_scripts', 'trestle_scripts');
