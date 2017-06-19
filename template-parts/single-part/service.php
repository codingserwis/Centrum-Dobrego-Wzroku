<?php 
/**
 *	Custom fields vars 
 */ 
	$service_content = get_field('our-services-content');
	$post_icon_url = get_field('service-icon')['url'];
	

/**
 * Counting the no of posts
 */ ?>
<div class="servis-box">
	<img src="<?php echo $post_icon_url;?>">
	<h2><?php the_title(); ?></h2>
	<p><?php echo $service_content; ?></p>
	<a class="btn-more-blue" href="<?php the_permalink(); ?>">Więcej</a>
</div>