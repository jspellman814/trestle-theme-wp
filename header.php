<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stanley_Halle_Communities
 */

?><!DOCTYPE html>
<html <?php html_tag_schema(); ?> <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <script type="text/javascript">var siteurl = '<?= get_bloginfo("url"); ?>';</script>
    <script type="text/javascript">var themeurl = '<?= get_template_directory_uri(); ?>';</script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'tm-shc'); ?></a>

    <header id="header" class="site-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner"></header>

    <div class="primary-menu">
        <div class="inner-wrapper">
            <div class="site-branding">
                <?php if (is_active_sidebar('header-logo')) : ?>
                    <span itemprop="logo"><?php dynamic_sidebar('header-logo'); ?></span>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><span
                            itemprop="name"><?php bloginfo('name'); ?></span></a>
                <?php endif; ?>
            </div>
            <!-- .site-branding -->
            <div class="icon-menu">
                <span class="element-invisible">show/hide menu</span>
                <a href="">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <!-- .icon-menu -->
            <nav id="navigation" class="main-navigation" role="navigation">
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul class="menu">%3$s</ul>')); ?>
                <div class="utility-menu">
                    <?php if (is_active_sidebar('header-utility-menu')) : ?>
                        <?php dynamic_sidebar('header-utility-menu'); ?>
                    <?php endif; ?>
                </div>
            </nav>
            <!-- #navigation -->
        </div>
        <!-- .inner-wrapper -->
    </div>

    <div id="main" class="site-content inner-wrapper">
