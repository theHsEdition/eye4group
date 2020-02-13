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

			<style>
				:root {
				  --main-color: <?php echo get_field("color"); ?>;
				}

				.wpcf7-submit {
					background-color: <?php echo get_field("color"); ?>;
				}
			</style>

			
				<header class="hero bg-image" style="background-image: url('<?php echo eye4group_header_image($post); ?>');">
					<div class="sizer">
						<div class="header-home-content">
							<h1 class="x-margin">Discover. Create. Implement.</h1>
							<p>Enter your email address to download our multi-tenant visual catalogue.</p>
							<?php get_template_part('partials/element-mailchimp-signup'); ?>
						</div>
					</div>
				</header>

				<section class="margin-top">
					<div class="grid-third">
						<div class="item">
							<svg class="icon-width" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57.7 56.8">
								  <defs>
								    <style>
								      .cls-1 {
								        fill: #fff;
								      }

								      .cls-2 {
								        fill: var(--main-color);
								      }
								    </style>
								  </defs>
								  <title>Discover</title>
								  <g id="Layer_2" data-name="Layer 2">
								    <g id="Layer_1-2" data-name="Layer 1">
								      <g>
								        <path class="cls-1" d="M28.9,56.8A28.7,28.7,0,0,1,8.6,48.6,28,28,0,0,1,8.5,8.3,28.8,28.8,0,0,1,28.8,0h.1A29.1,29.1,0,0,1,49.2,8.2a28,28,0,0,1,8.5,20.2C57.8,44,44.8,56.8,28.9,56.8Zm0-42h-.1a14.1,14.1,0,0,0-9.9,4.1,13.3,13.3,0,0,0-4.1,9.5A13.6,13.6,0,0,0,18.9,38a14.2,14.2,0,0,0,10,4h0a13.8,13.8,0,0,0,14-13.6,13.2,13.2,0,0,0-4.1-9.5A14.1,14.1,0,0,0,28.9,14.8Z"/>
								        <path class="cls-2" d="M28.9,55.3A27.7,27.7,0,0,1,9.6,47.5a26.3,26.3,0,0,1-8-19,26.1,26.1,0,0,1,8-19.1A27.2,27.2,0,0,1,28.8,1.6h.1A27.5,27.5,0,0,1,48.1,9.3a26.6,26.6,0,0,1,8.1,19.1c0,14.8-12.2,26.8-27.3,26.9Zm0-42h-.1a15.4,15.4,0,0,0-11,4.5,14.7,14.7,0,0,0-4.5,10.6,14.9,14.9,0,0,0,4.5,10.7,15.8,15.8,0,0,0,11.1,4.5h0c8.6-.1,15.6-6.9,15.6-15.2a15.2,15.2,0,0,0-4.6-10.7A15.9,15.9,0,0,0,28.9,13.3Z"/>
								        <path class="cls-1" d="M28.9,49.4c-11.8,0-21.5-9.3-21.5-20.9A21.3,21.3,0,0,1,28.8,7.4a21.2,21.2,0,0,1,21.5,21A21.1,21.1,0,0,1,28.9,49.4Z"/>
								        <circle cx="28.9" cy="28.4" r="18.5"/>
								        <path class="cls-1" d="M27.1,16.8c9.2,0,13.8,4.5,13.8,11.4h0c0,6.8-4.7,11.7-14,11.7H18.3V16.8h8.8m.2,16.4c3.5,0,5.8-1.4,5.8-4.8h0c0-3.4-2.3-4.8-5.8-4.8H26v9.6Z"/>
								      </g>
								    </g>
								  </g>
								</svg>


							<h3>Discover.</h3>
							<p>We begin by scheduling a face-to-face consultation where we establish your budget, a cohesive design direction, and suitable products for your project. In addition, we may also conduct an on-site survey. Afterwards, we prepare an accurate budget and quote for your approval before moving forward.</p>
						</div>

						<div class="item">
							<svg class="icon-width" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57.7 56.8">
								  <defs>
								    <style>
								      .cls-1 {
								        fill: #fff;
								      }

								      .cls-2 {
								        fill: var(--main-color);
								      }
								    </style>
								  </defs>
								  <title>Create</title>
								  <g id="Layer_2" data-name="Layer 2">
								    <g id="Layer_1-2" data-name="Layer 1">
								      <g>
								        <path class="cls-1" d="M28.9,56.8A28.7,28.7,0,0,1,8.6,48.6,28,28,0,0,1,8.5,8.3,28.8,28.8,0,0,1,28.8,0h.1A29.1,29.1,0,0,1,49.2,8.2a28,28,0,0,1,8.5,20.2C57.8,44,44.8,56.8,28.9,56.8Zm0-42h-.1a14.1,14.1,0,0,0-9.9,4.1,13.3,13.3,0,0,0-4.1,9.5A13.6,13.6,0,0,0,18.9,38a14.2,14.2,0,0,0,10,4h0a13.8,13.8,0,0,0,14-13.6,13.2,13.2,0,0,0-4.1-9.5A14.1,14.1,0,0,0,28.9,14.8Z"/>
								        <path class="cls-2" d="M28.9,55.3A27.7,27.7,0,0,1,9.6,47.5a26.3,26.3,0,0,1-8-19,26.1,26.1,0,0,1,8-19.1A27.2,27.2,0,0,1,28.8,1.6h.1A27.5,27.5,0,0,1,48.1,9.3a26.6,26.6,0,0,1,8.1,19.1c0,14.8-12.2,26.8-27.3,26.9Zm0-42h-.1a15.4,15.4,0,0,0-11,4.5,14.7,14.7,0,0,0-4.5,10.6,14.9,14.9,0,0,0,4.5,10.7,15.8,15.8,0,0,0,11.1,4.5h0c8.6-.1,15.6-6.9,15.6-15.2a15.2,15.2,0,0,0-4.6-10.7A15.9,15.9,0,0,0,28.9,13.3Z"/>
								        <path class="cls-1" d="M28.9,49.4c-11.8,0-21.5-9.3-21.5-20.9A21.3,21.3,0,0,1,28.8,7.4a21.2,21.2,0,0,1,21.5,21A21.1,21.1,0,0,1,28.9,49.4Z"/>
								        <circle cx="28.9" cy="28.4" r="18.5"/>
								        <path class="cls-1" d="M17.4,28.5h0A12,12,0,0,1,29.7,16.3a11.4,11.4,0,0,1,10.5,6.1l-6.4,3.7a4.5,4.5,0,0,0-4.2-2.8c-2.6,0-4.3,2.3-4.3,5h0c0,3,1.7,5.1,4.3,5.1S33,32.4,34,30.6l6.4,3.6a11.7,11.7,0,0,1-11,6.3A11.8,11.8,0,0,1,17.4,28.5Z"/>
								      </g>
								    </g>
								  </g>
								</svg>
							<h3>Create.</h3>
							<p>We will provide you with the initial design proposals for your project. After reviewing, you will have the opportunity to request any revisions before the design is finalized. Once a design is approved, we then move to the implementation phase.</p>
						</div>

						<div class="item">
							<svg class="icon-width" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57.7 56.8">
							  <defs>
							    <style>
							      .cls-1 {
							        fill: #fff;
							      }

							      .cls-2 {
							        fill: var(--main-color);
							      }
							    </style>
							  </defs>
							  <title>Implement</title>
							  <g id="Layer_2" data-name="Layer 2">
							    <g id="Layer_1-2" data-name="Layer 1">
							      <g>
							        <path class="cls-1" d="M28.9,56.8A28.7,28.7,0,0,1,8.6,48.6,28,28,0,0,1,8.5,8.3,28.8,28.8,0,0,1,28.8,0h.1A29.1,29.1,0,0,1,49.2,8.2a28,28,0,0,1,8.5,20.2C57.8,44,44.8,56.8,28.9,56.8Zm0-42h-.1a14.1,14.1,0,0,0-9.9,4.1,13.3,13.3,0,0,0-4.1,9.5A13.6,13.6,0,0,0,18.9,38a14.2,14.2,0,0,0,10,4h0a13.8,13.8,0,0,0,14-13.6,13.2,13.2,0,0,0-4.1-9.5A14.1,14.1,0,0,0,28.9,14.8Z"/>
							        <path class="cls-2" d="M28.9,55.3A27.7,27.7,0,0,1,9.6,47.5a26.3,26.3,0,0,1-8-19,26.1,26.1,0,0,1,8-19.1A27.2,27.2,0,0,1,28.8,1.6h.1A27.5,27.5,0,0,1,48.1,9.3a26.6,26.6,0,0,1,8.1,19.1c0,14.8-12.2,26.8-27.3,26.9Zm0-42h-.1a15.4,15.4,0,0,0-11,4.5,14.7,14.7,0,0,0-4.5,10.6,14.9,14.9,0,0,0,4.5,10.7,15.8,15.8,0,0,0,11.1,4.5h0c8.6-.1,15.6-6.9,15.6-15.2a15.2,15.2,0,0,0-4.6-10.7A15.9,15.9,0,0,0,28.9,13.3Z"/>
							        <path class="cls-1" d="M28.9,49.4c-11.8,0-21.5-9.3-21.5-20.9A21.3,21.3,0,0,1,28.8,7.4a21.2,21.2,0,0,1,21.5,21A21.1,21.1,0,0,1,28.9,49.4Z"/>
							        <circle cx="28.9" cy="28.4" r="18.5"/>
							        <path class="cls-1" d="M25,16.8h7.7V40H25Z"/>
							      </g>
							    </g>
							  </g>
							</svg>

							<h3>Implement.</h3>
							<p>Approved designs are fabricated, produced, and prepared for installation on site. Before final placement, all products are carefully reviewed by quality control before being safely packaged for transport. Lastly, our experienced installation team ensures that your graphic package is completed to your satisfaction.</p>
						</div>
					</div>
				</section>

				<section>
					<h2 class="panel-title">Products</h2>
				</section>

				<?php get_template_part('partials/section-default'); ?>

				<?php get_template_part('partials/section-cta-large'); ?>

				<section>
					<h2 class="panel-title">Case Studies</h2>
				</section>

				<section class="case-studies">
					
						<?php
						if( have_rows('case_studies') ):
						    while ( have_rows('case_studies') ) : the_row();

						        $title = get_sub_field('case_study_title');
						        $cs_stage = 1; ?>

								
								<h3 class="title"><?php echo $title; ?></h2>

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
											

											<hr class="line">
									        <p><?php echo $cs_desc; ?></p>
				
										</div>



								    <?php endwhile;
								else :
								    // no rows found
								endif; ?>
										</div>
										<div class="">
											<?php
											// Load value (array of ids).
											$images = get_sub_field('gallery');
												foreach( $images as $image ): ?>
													<img style="width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												
											<?php endforeach; ?>
										</div>

						    <?php endwhile; ?>

						

						

						<?php else :
						    // no rows found
						endif;

						?>
					</div>
				</section>

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
