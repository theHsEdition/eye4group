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

	<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
		
		<div id="inner-footer" class="cf">

			<nav class="grid-four">

				<h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><strong>Skymouse</strong>Labs</a></h3>

				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav>
		</div>

		<div class="footer-links cf">
			<p>&copy; <?php echo date('Y'); ?> Skymouse Studios</p>

			<p class="location">Chattanooga, TN</p>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
