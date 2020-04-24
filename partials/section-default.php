<?php 

	if( have_rows('section' , $id ) ):
 	// loop through the rows of data
    while ( have_rows('section' , $id ) ) : the_row();
    	$section_image = get_sub_field('section_image'); 
    	$section_icon = get_sub_field('section_icon');
    	$section_title = get_sub_field('section_title'); 
    	$section_content = get_sub_field('section_content');
    	$section_custom = get_sub_field('section_custom');

    	$section_title_id = str_replace(' ', '-', $section_title);
    	?>

       <section class="panel-display bottom-margin panel-alt">
			<div class="grid-half">
				<div class="primary">
					<div class="image-container">
						<img src="<?php echo $section_image['url']; ?>" alt="<?php echo $section_image['alt']; ?>" />
					</div>

					<div class="">
						<?php echo $section_custom; ?>
					</div>
				</div>
				
				<div class="content">
					<h3 class="x-margin"><?php echo $section_title; ?></h2>
					<p><?php echo $section_content; ?></p>

					<img src="<?php echo get_template_directory_uri(); ?>/inc/images/border-1.png" alt="" class="content-bg">
				</div>
			</div>
		</section>
<?php
    endwhile;
	endif; ?>