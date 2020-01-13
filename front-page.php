<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package isidore
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			
				<header class="hero panel-color bottom-margin">
					<div class="sizer">
						<div class="header-home-content">
							<p class="x-margin subtitle">*Now sold in select locations.</p>
							<h1 class="x-margin">Local <span class="text-green">Grass-fed</span> Lamb,<br> raised in Middle Tennesee</h1>

							<a class="button header-button" href="/order">Buy Lamb<span>*</span></a>
						</div>
					</div>
				</header>

				<?php home_section( 'default' ); ?>

				<?php get_template_part('partials/section-sign-up-callout'); ?>

				<section class="panel-signup bottom-margin">
					<img class="icon-width" src="/wp-content/uploads/2019/12/icons_tennessee.png" alt="State of Tennessee Icon">
					<h2 class="x-margin text-light">We'll be selling right off the Farm in January 2019!</h2>
					<p class="x-margin text-gray">Be the first to get lamb, straight from the pasture.</p>

					<?php get_template_part('partials/element-mailchimp-signup'); ?>
				</section>
			
			<?
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
