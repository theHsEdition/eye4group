<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skytheme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer panel-color">
		<div class="footer-container sizer">
			<div class="site-info">
				<p>&copy; <?php echo date('Y'); ?> skytheme</p>
			</div>

			<nav class="footer-nav">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
