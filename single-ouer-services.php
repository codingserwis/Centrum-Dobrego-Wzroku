<?php 
/* Custom post type for "Nasze usługi" */
	$post_icon_url = get_field('service-icon')['url'];
	get_header(); 

?>
<main class="main-post">
	<div class="container">
		<div class="row">
			<div class="single-post-container">
			<div class="service-img">
				<?php the_post_thumbnail(); ?>
			</div>			
			<h2 class="servis-post-title"><?php the_title(); ?></h2>
				<?php while (have_posts()) : the_post(); ?>
					<div class="post-content">
						<?php the_content(); ?>
					</div>
				 <?php endwhile;?>
			</div>
			<aside class="custom-post-side">
				<div class="post-contact-box">
					<h2>umów się na wizyte</h2>
					<div>
						<?php get_template_part('template-parts/offices-address-niemodlinska-footer'); ?>
					</div>
					<div>
						<?php get_template_part('template-parts/offices-address-ozimska-footer'); ?>
					</div>
				</div>
			</aside>
		</div>
	</div>
</main>


<?php get_footer(); ?>