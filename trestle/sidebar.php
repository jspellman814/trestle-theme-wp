<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trestle
 */

if (!is_active_sidebar('sidebar-first')) {
  return;
} ?>

<aside id="secondary" class="widget-area sidebar-first" role="complementary">
  <?php dynamic_sidebar('sidebar-first'); ?>
</aside><!-- #secondary -->
