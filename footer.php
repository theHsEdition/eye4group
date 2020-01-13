<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package isidore
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer panel-color">
		<div class="footer-container sizer">
			<div class="site-info">
				<img src="/wp-content/uploads/2019/12/exports_st-isidore-logo-no-border.png" alt="St. Isidore Farms">
				<h3 class="x-margin">St. Isidore Farms</h3>
				<p>Tennesee Grassfed Lamb</p>
				<p>1084 Perry Rd.<br>
					Manchester, TN<br>
					37355</p> 
				<p>&copy; <?php echo date('Y'); ?> St. Isidore Farms, LLC</p>
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
