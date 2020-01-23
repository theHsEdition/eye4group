<?php 

	if( have_rows('section' , $id ) ):
 	// loop through the rows of data
    while ( have_rows('section' , $id ) ) : the_row();
    	$section_image = get_sub_field('section_image'); 
    	$section_icon = get_sub_field('section_icon');
    	$section_title = get_sub_field('section_title'); 
    	$section_content = get_sub_field('section_content');

    	$section_title_id = str_replace(' ', '-', $section_title);
    	?>

       <section id="<?php echo $section_title_id; ?>" class="panel-display bottom-margin panel-alt">
			<div class="sizer grid-half">
				<div class="content">
					<h3 class="x-margin"><?php echo $section_title; ?></h2>
					<p><?php echo $section_content; ?></p>
				</div>
				<div class="primary">
					<div class="image-container">
						<img src="<?php echo $section_image['url']; ?>" alt="<?php echo $section_image['alt']; ?>" />
					</div>
				</div>
				<div class="gallery gallery-columns-3">
					<?php
					// Load value (array of ids).
					$images = get_sub_field('section_gallery');
						foreach( $images as $image ): ?>
							<img class="gallery-item" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endforeach; ?>
				</div>
			</div>
		</section>
<?php
    endwhile;
	endif; ?>