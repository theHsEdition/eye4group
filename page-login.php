<?php
/**
* Template Name: Login
*
*/

get_header(); ?>


<div class="login-grid">
	
	<div class="login-area">

		<a href="https://lab.skymousestudios.com"><img src="https://lab.skymousestudios.com/wp-content/uploads/2019/10/skymse-logo-circle.png" alt="Skymouse Logo"></a>

		
		<?php $page = basename(get_permalink());
			if ($page == "register" ) { ?>
			<div class="login-form-block">
				<h1>Get started for absolutely free</h1>
				<p class="subtitle">Marketing just got way easier.</p>
				<?php echo do_shortcode('[wpmem_form register]'); ?>
			</div>
		<?php } ?>

		<?php if ($page == "login") { ?>
			<div class="login-form-block">
				<h1>Hey, Welcome Back!</h1>
				<?php echo do_shortcode('[wpmem_form login redirect_to="https://lab.skymousestudios.com/content-library/"]'); ?>
			</div>
		<?php } ?>
	</div>

	<div class="orange" style="background-image: url('https://lab.skymousestudios.com/wp-content/uploads/2019/10/scene-mountains_scene-mountains.png');">
		<ul class="register-ul">
			<li>🚙 Generate more website traffic</li>
			<li>💬 Get visitors to start conversations</li>
			<li>🧠 Understand how marketing works in 2020</li>
		</ul>
	</div>

</div>

<?php get_footer();?>