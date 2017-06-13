<?php 

	$args = array('post_type' => 'post',
					'posts_per_page' => 1,
					'orderby' => 'ID',
					'order' => 'DESC');

			$loop = new WP_Query($args);
			while($loop -> have_posts()) : $loop -> the_post(); ?>
			<h3 class="news-heading">
				<?php the_title(); ?>
			</h3>
				<?php the_excerpt();
			endwhile;
		wp_reset_postdata();

?>