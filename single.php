<?php get_header(); ?>
<main class="main-post">
	<div class="container">
		<div class="row">
			<div class="single-post-container">
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('template-parts/single-part/ssingle'); ?>
				 <?php endwhile;?>
			</div>
			<aside class="archive-sidebar">
			<?php get_sidebar(); ?>
		</aside>
		</div>
	</div>
	
</main>

<?php get_footer(); ?>