<?php
/**
 * Template Name: Landing Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package skytheme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<style>
				:root {
				  --main-color: <?php echo get_field("color"); ?>;
				}

				.wpcf7-submit {
					background-color: <?php echo get_field("color"); ?>;
				}
			</style>

			
				<header class="hero block" style="background-image: url('<?php echo skytheme_header_image($post); ?>');">
					<div class="grid-half sizer">
						<div class="header-home-content">
							<?php 
								$callout_cta_text = get_field('callout_cta_text');
								$callout_cta_link = get_field('callout_cta_link');
								$callout_title = get_field('callout_title');
								$callout_subtitle = get_field('callout_subtitle');
								$callout_icon = get_field('callout_icon');
							?>


							<h1 class="x-margin"><?php echo $callout_title; ?></h1>
							<p class="pad subtitle"><?php echo $callout_subtitle; ?></p>

							<a class="button btn-dark" href="<?php echo $callout_cta_link; ?>"><?php echo $callout_cta_text; ?></a>
						</div>

						<div class="">
							<img src="<?php echo $callout_icon["url"]; ?>" alt="<?php echo $callout_icon["alt"]; ?>">
						</div>
					</div>
				</header>

				<?php get_template_part('partials/section-default'); ?>

				<?php get_template_part('partials/section-cta-large'); ?>
			
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				the_content();
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
