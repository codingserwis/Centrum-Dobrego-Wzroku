<?php  
			$args = array('post_type' => 'our-office',
							'title' => 'Informacje kontaktowe Ozimska');

			$loop = new WP_Query($args);
			while($loop -> have_posts()) : $loop -> the_post();
				get_template_part('template-parts/single-part/address');
			endwhile;
		wp_reset_postdata();
?>