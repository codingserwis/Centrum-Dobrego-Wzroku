<?php 
/* Template Name: Archiwum */

get_header(); ?>

<main class="main-post">
	<div class="container">
		<div class="row">
			<div class="archive-container">
				<?php $args = array('post_type' => 'post');

					$loop = new WP_Query($args);
					while($loop -> have_posts()) : $loop -> the_post();?>
					<div class="single-archive">
						<div class="single-header">
							<h1>
								<?php the_title(); ?>
							</h1>
						</div>
						<div class="single-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="single-content">
							<?php the_excerpt(); ?>
						</div>
					</div>
					<hr class="orange_underscore archive-underscore">
				<?php endwhile;
				wp_reset_postdata(); ?>
			</div><!-- end archive container -->
		<aside class="archive-sidebar">
			<?php get_sidebar(); ?>
		</aside>
	</div>
	</div><!-- end container -->
</main>

<?php get_footer(); ?>