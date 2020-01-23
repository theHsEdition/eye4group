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
 * @package eye4group
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			
				<header class="hero bg-image">
					<div class="sizer">
						<div class="header-home-content">
							<h1 class="x-margin">Discover. Create. Implement.</h1>
							<p>Download the brochure.</p>
							<?php get_template_part('partials/element-mailchimp-signup'); ?>
						</div>
					</div>
				</header>

				<section class="margin-top">
					<div class="grid-third">
						<div class="item">
							<img class="icon-width" src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/discover.png" alt="">
							<h3>Discover.</h3>
							<p>We begin by scheduling a face-to-face consultation where we establish your budget, a cohesive design direction, and suitable products for your project. In addition, we may also conduct an on-site survey. Afterwards, we prepare an accurate budget and quote for your approval before moving forward.</p>
						</div>

						<div class="item">
							<img class="icon-width" src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/create.png" alt="">
							<h3>Create.</h3>
							<p>We will provide you with the initial design proposals for your project. After reviewing, you will have the opportunity to request any revisions before the design is finalized. Once a design is approved, we then move to the implementation phase.</p>
						</div>

						<div class="item">
							<img class="icon-width" src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/implement.png" alt="">
							<h3>Implement.</h3>
							<p>Approved designs are fabricated, produced, and prepared for installation on site. Before final placement, all products are carefully reviewed by quality control before being safely packaged for transport. Lastly, our experienced installation team ensures that your graphic package is completed to your satisfaction.</p>
						</div>
					</div>
				</section>

				<section>
					<h2 class="panel-title">Products</h2>
				</section>

				<?php home_section( 'default' ); ?>

				<section class="panel-cta-large">
					<h2>Redefine your curb appeal.</h2>

					<div class="grid-half">
						<div>
							<h4>Get ballpark pricing for your next project.</h4>
							<a class="button button-primary" href="">Know Your Cost</a>
						</div>
						<div>
							<h4>We promise you'll love this more!</h4>
							<a class="button button-primary" href="">Talk to Brock</a>
						</div>
					</div>
					
				</section>

				<section>
					<h2 class="panel-title">Case Studies</h2>
				</section>

				<section class="case-studies">
					
						<?php
						if( have_rows('case_studies') ):
						    while ( have_rows('case_studies') ) : the_row();

						        $title = get_sub_field('case_study_title');
						        $cs_stage = 1; ?>

								
								<h2 class="title"><?php echo $title; ?></h2>

								<div class="grid-third">

								<?php if( have_rows('stages') ):
								    while ( have_rows('stages') ) : the_row();

								        $cs_img = get_sub_field('image');
								        $cs_desc = get_sub_field('description'); 

								        ?>
										
										<div>

											<?php if ( $cs_stage == 1 ): ?>
												<h3>Discover</h3>
												<?php   
													$cs_stage = 2;
												 ?>
											<?php elseif ( $cs_stage == 2 ): ?>
												<h3>Create</h3>
												<?php   
													$cs_stage = 3;
												 ?>
											<?php elseif ( $cs_stage == 3 ): ?>
												<h3>Implement</h3>
											<?php endif; ?>
											
												<img src="<?php echo $cs_img['url']; ?>" alt="<?php echo $cs_img['alt']; ?>" />
											

											<hr class="line-orange">
									        <p><?php echo $cs_desc; ?></p>
				
										</div>



								    <?php endwhile;
								else :
								    // no rows found
								endif; ?>
										</div>
										<div class="grid-third">
											<?php
											// Load value (array of ids).
											$images = get_sub_field('gallery');
												foreach( $images as $image ): ?>
													<div class="image-container">
													<img class="" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												</div>
											<?php endforeach; ?>
										</div>

						    <?php endwhile; ?>

						

						

						<?php else :
						    // no rows found
						endif;

						?>
					</div>
				</section>

				<?php get_template_part('partials/section-sign-up-callout'); ?>
			
			<?php
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
