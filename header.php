<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skytheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'skytheme' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="site-branding">

		<?php if ( is_page_template('landing-page.php') ) : ?>
			<svg style="width: 70px; margin: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.5 63.7">
			  <defs>
			    <style>
			      .cls-1 {
			        fill: #fff;
			      }

				:root {
				  --main-color: <?php echo get_field("color"); ?>;
				}
			    </style>
			  </defs>
			  <title>Asset 4</title>
			  <g id="Layer_2" data-name="Layer 2">
			    <g id="Layer_1-2" data-name="Layer 1">
			      <g>
			        <path class="cls-1" d="M-107.8-429.2A20.1,20.1,0,0,1-128.1-449a20,20,0,0,1,20.2-19.9,20,20,0,0,1,20.3,19.8A20.1,20.1,0,0,1-107.8-429.2Z" transform="translate(144.9 474.4)"/>
			        <path class="cls-2" d="M-108.5-474.4c-8.2,0-14.7,4.1-20.3,9.7l-16.1,15.9,18,17.5h0a26.2,26.2,0,0,0,18.6,7.6c14.3,0,25.9-11.4,25.8-25.4A25.6,25.6,0,0,0-108.5-474.4Zm.7,45.2A20.1,20.1,0,0,1-128.1-449a20,20,0,0,1,20.2-19.9,20,20,0,0,1,20.3,19.8A20.1,20.1,0,0,1-107.8-429.2Z" transform="translate(144.9 474.4)"/>
			        <path class="cls-1" d="M-74.1-434.2H-76a.7.7,0,0,1-.7-.6V-449a.6.6,0,0,0-.6-.6h-4.5a1.1,1.1,0,0,0-.9.5l-9.5,14.4a2.3,2.3,0,0,0-.3,1.1v3.2a.5.5,0,0,0,.6.6h9.6a.7.7,0,0,1,.6.7v3.7a.6.6,0,0,0,.6.6h3.8a.6.6,0,0,0,.6-.6v-3.7a.7.7,0,0,1,.7-.7h1.9a.5.5,0,0,0,.6-.6v-3.2A.6.6,0,0,0-74.1-434.2Zm-7.6-.6a.6.6,0,0,1-.6.6h-4.4c-.3,0-.4-.2-.2-.5l4.8-7.5c.2-.3.3-.5.4-.5v7.9Z" transform="translate(144.9 474.4)"/>
			        <g>
			          <path d="M-98.8-434.9a8.2,8.2,0,0,1-2-1.2,6.4,6.4,0,0,1-1.3-1.9,7,7,0,0,1-.5-2.5,7,7,0,0,1,.5-2.5,6.4,6.4,0,0,1,1.3-1.9,8.2,8.2,0,0,1,2-1.2,7,7,0,0,1,2.5-.5,5.4,5.4,0,0,1,2.2.5,3.3,3.3,0,0,1,1.7,1.2,5.9,5.9,0,0,1,1.1,1.9c.1.2.1.4.2.6a19.6,19.6,0,0,0,1.1-6.4,18.5,18.5,0,0,0-1.2-6.7,7.4,7.4,0,0,1-4.8,1.7,7.8,7.8,0,0,1-7.7-7.7,7.7,7.7,0,0,1,1.4-4.4,19.9,19.9,0,0,0-5.6-.9,18,18,0,0,0-17.9,18,17.7,17.7,0,0,0,.8,5.2,6.4,6.4,0,0,1,1-1.3,8.2,8.2,0,0,1,2-1.2,7,7,0,0,1,2.5-.5,5.4,5.4,0,0,1,2.2.5,3.8,3.8,0,0,1,1.7,1.2,5.9,5.9,0,0,1,1.1,1.9,7.7,7.7,0,0,1,.4,2.7v.8h-8.8a1.3,1.3,0,0,0,.1.6,10.9,10.9,0,0,0,1.3,1.7,3.3,3.3,0,0,0,1.7.4,3.4,3.4,0,0,0,1.8-.4,6.9,6.9,0,0,0,1.3-1.1l2.1,1.5a5.4,5.4,0,0,1-2.3,1.8,5.5,5.5,0,0,1-1.7.5,17.6,17.6,0,0,0,5.8,2.9h1.4a.9.9,0,0,0,.6-.3l.4-.5a5.9,5.9,0,0,1,.4-.8l.5-1.3-4.9-11.7h3.2l3.2,8h0l2.9-8h3l-5.4,14a6.1,6.1,0,0,1-.7,1.4h.3a17.5,17.5,0,0,0,10.8-3.6Z" transform="translate(144.9 474.4)"/>
			          <path d="M-96.7-444.4a3.3,3.3,0,0,0-2.1.7,3.4,3.4,0,0,0-.9,2h5.9a2.8,2.8,0,0,0-.8-2A2.8,2.8,0,0,0-96.7-444.4Z" transform="translate(144.9 474.4)"/>
			          <path d="M-119.9-444.4a3.3,3.3,0,0,0-2.1.7,3.4,3.4,0,0,0-.9,2h5.9a2.8,2.8,0,0,0-.8-2A2.8,2.8,0,0,0-119.9-444.4Z" transform="translate(144.9 474.4)"/>
			          <path d="M-99.7-439.5a2.8,2.8,0,0,0,1,2,3.1,3.1,0,0,0,2.1.7,4.2,4.2,0,0,0,2-.4,4.1,4.1,0,0,0,1.2-1.1h0l.8-1.2Z" transform="translate(144.9 474.4)"/>
			        </g>
			        <g>
			          <path class="cls-1" d="M-103.1-414.3a2.7,2.7,0,0,1-.2,1.3,4.7,4.7,0,0,1-.6.9,2.4,2.4,0,0,1-1.1.6,2.8,2.8,0,0,1-1.3.3,4,4,0,0,1-1.5-.3,2.6,2.6,0,0,1-1.3-.8l.7-.9,1,.7,1.1.2a1.5,1.5,0,0,0,1-.2l.7-.4a1.5,1.5,0,0,0,.3-.7,1.7,1.7,0,0,0,.1-.7v-.9h0a1.8,1.8,0,0,1-.9.8,2.3,2.3,0,0,1-1.1.3,2.1,2.1,0,0,1-1.2-.3,2.1,2.1,0,0,1-1-.6,2.4,2.4,0,0,1-.6-.9,2.5,2.5,0,0,1-.2-1.2,2.2,2.2,0,0,1,.2-1.2,1.7,1.7,0,0,1,.6-1,3.1,3.1,0,0,1,.9-.7l1.3-.2,1.1.2a2.4,2.4,0,0,1,.9.8h0v-.9h1.1Zm-3-4.9-.8.2a.9.9,0,0,0-.6.4l-.4.6a2.8,2.8,0,0,0-.1.9,1.7,1.7,0,0,0,.5,1.4,2,2,0,0,0,1.4.5,2,2,0,0,0,1.4-.5,2.2,2.2,0,0,0,.5-1.4,2.8,2.8,0,0,0-.1-.9l-.4-.6-.6-.4Z" transform="translate(144.9 474.4)"/>
			          <path class="cls-1" d="M-101.4-420.1h1.1v.9h.1a.5.5,0,0,1,.3-.4l.4-.3.5-.2h1v1.3h-.6a1.6,1.6,0,0,0-1.2.4,2,2,0,0,0-.5,1.4v3h-1.1Z" transform="translate(144.9 474.4)"/>
			          <path class="cls-1" d="M-97.3-417.1a3.7,3.7,0,0,1,.2-1.2,3.6,3.6,0,0,1,.7-1l1-.7,1.2-.2,1.2.2,1,.7a3.6,3.6,0,0,1,.7,1,2.2,2.2,0,0,1,.2,1.2,2.5,2.5,0,0,1-.2,1.2,3.1,3.1,0,0,1-.7.9l-1,.7a2.3,2.3,0,0,1-1.2.2,2.5,2.5,0,0,1-1.2-.2l-1-.7a3.1,3.1,0,0,1-.7-.9A5,5,0,0,1-97.3-417.1Zm1.2,0a2.2,2.2,0,0,0,.1.8,2.1,2.1,0,0,0,.4.6l.6.4.8.2.8-.2a.9.9,0,0,0,.6-.4,2.1,2.1,0,0,0,.4-.6,2.2,2.2,0,0,0,.1-.8,2.8,2.8,0,0,0-.1-.9l-.4-.6a.9.9,0,0,0-.6-.4l-.8-.2-.8.2-.6.4-.4.6A2.8,2.8,0,0,0-96.1-417.1Z" transform="translate(144.9 474.4)"/>
			          <path class="cls-1" d="M-84.5-414.2h-1.1v-.9h0a1.2,1.2,0,0,1-.7.7,2.7,2.7,0,0,1-1.2.3h-.9l-.6-.4a1.8,1.8,0,0,1-.5-.7,3,3,0,0,1-.2-1v-3.8h1.1v3.5a1.4,1.4,0,0,0,.2.7c0,.2.1.3.3.5a.5.5,0,0,0,.4.2h1.1a1,1,0,0,0,.5-.4.9.9,0,0,0,.4-.6,2.2,2.2,0,0,0,.1-.9v-3h1.1Z" transform="translate(144.9 474.4)"/>
			          <path class="cls-1" d="M-82.8-420.1h1.1v.9h.1a3,3,0,0,1,.8-.8l1.2-.2,1.2.2,1,.7a4.4,4.4,0,0,1,.6,1,3.7,3.7,0,0,1,.2,1.2,5,5,0,0,1-.2,1.2l-.6,1-1,.6a2.3,2.3,0,0,1-1.2.2,2.5,2.5,0,0,1-1.2-.2,1.6,1.6,0,0,1-.8-.8h-.1v4.4h-1.1Zm3.1.9-.8.2-.7.4-.3.6a2.9,2.9,0,0,0-.2.9,2.4,2.4,0,0,0,.2.8l.3.6.7.4.8.2.8-.2.6-.4.4-.6c0-.3.1-.5.1-.8s-.1-.6-.1-.9l-.4-.6-.6-.4Z" transform="translate(144.9 474.4)"/>
			        </g>
			      </g>
			    </g>
			  </g>
			</svg>

		<?php endif; ?>


			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
		?>
		</div><!-- .site-branding -->

		<?php 
			if ( is_page_template('landing-page.php') ) :
				if( have_rows('section' , $id ) ): ?>
					<nav class="main-navigation">
				 	<ul class="menu nav-menu" aria-expanded="false">
				 	
				 	<?php // loop through the rows of data
				   	 while ( have_rows('section' , $id ) ) : the_row();
				    	$section_title = get_sub_field('section_title');
				    	$section_title_id = str_replace(' ', '-', $section_title); ?>

			    		<li id="menu-item-181" class="menu-item ">
			    			<a href="#<?php echo $section_title_id; ?>">
				    			<?php echo $section_title; ?>
				    		</a>
				    	</li>
					<?php
				    endwhile;?>

				    </ul>
				    </nav>

				<?php endif; ?>

				<?php
			else :
				?>
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'skytheme' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
		<?php
			endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
