<?php 
	$callout_cta_text = get_field('callout_cta_text');
	$callout_cta_link = get_field('callout_cta_link');
	$callout_title = get_field('callout_title');
	$callout_subtitle = get_field('callout_subtitle');
	$callout_icon = get_field('callout_icon');
?>

<section class="panel-callout bottom-margin">
	<img class="icon" src="<?php echo $callout_icon['url']; ?>" alt="<?php echo $callout_icon['alt']; ?>" />

	<p class="x-margin subtitle"><?php echo $callout_subtitle; ?></p>
	<h2 class="x-margin"><?php echo $callout_title; ?></h2>
	<p></p>
	<a class="button button-green" href="<?php echo $callout_cta_link; ?>"><?php echo $callout_cta_text; ?></a>
	
</section>