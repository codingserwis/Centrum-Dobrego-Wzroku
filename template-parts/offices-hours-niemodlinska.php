<?php  
			$args = array(
							'post_type' => 'our-office',
							'p' 	=> 16);

			$loop = new WP_Query($args);
			while($loop -> have_posts()) : $loop -> the_post(); ?>
			<h2 class="hours-heading"><?php the_title(); ?></h2>
				<?php get_template_part('template-parts/single-part/hours');
			endwhile;
		wp_reset_postdata();
?>