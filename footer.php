<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stanley_Halle_Communities
 */

?>

<div class="back-to-top"></div>

</div><!-- #content -->

<footer id="footer" class="site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter" role="contentinfo">
	<div class="inner-wrapper footer-blocks">

	</div>
	<div class="copyright center">
		<div class="company">
			&copy; 1977 - <?php echo date('Y'); ?> <span itemprop="name"><?php echo get_bloginfo('name'); ?></span><span class="sep">|</span>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
