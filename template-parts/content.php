<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package skytheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php 
		$categories = get_the_category();
			if ( ! empty( $categories ) ) {
			    echo '<a class="tag" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>'; 
			}
		?>

		<?php
			if ( is_singular() ) :
				
				the_title( '<h1 class="entry-title">', '</h1>' );

				if ( 'post' === get_post_type() ) :
				?>
				<!-- <div class="entry-meta">
					<?php
					// skytheme_posted_on();
					// skytheme_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php 	endif; 

		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

		endif;
	 ?>
	</header><!-- .entry-header -->

	
		<?php 
		if ( ! is_singular() ) :

			skytheme_post_thumbnail(); 

		endif;
		?>

	<?php if ( is_singular() ): ?>
	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'skytheme' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'skytheme' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php // skytheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
