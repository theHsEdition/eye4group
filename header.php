<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eye4group
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eye4group' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="site-branding">
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
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'eye4group' ); ?></button>
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
