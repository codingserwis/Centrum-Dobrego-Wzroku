<div class="row">
<?php  
			$args = array('post_type' => 'ouer-services',
							'orderby' => 'ID',
							'order' => 'ASC'
						);

			$loop = new WP_Query($args);
			while($loop -> have_posts()) : $loop -> the_post();
				 	get_template_part('template-parts/single-part/service');
			endwhile;
		wp_reset_postdata();?>
</div>