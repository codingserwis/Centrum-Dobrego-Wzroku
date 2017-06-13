<?php 
/* Template Name: Kontakt */

get_header(); ?>
<main class="main-post">
	<div class="container">
		<div class="row">
			<div class="single-post-container">
			<h2 class="servis-post-title"><?php the_title(); ?></h2>
			<div class="g_map margin-bottom">
				<?php echo do_shortcode('[wpgmza id="1"]'); ?>
			</div>
				<?php// while (have_posts()) : the_post(); ?>
					<h2 class="servis-post-title">
						Zapraszamy do naszych salonów w godzinach
					</h2>
					<div class="">
						<div class="news-hours lblue-bcg kontakt-box">
							<?php get_template_part('template-parts/offices-hours-ozimska'); ?>
						</div>
						<div class="news-hours dblue-bcg kontakt-box">
							<?php get_template_part('template-parts/offices-hours-niemodlinska'); ?>
						</div>
					</div>
						<?php //the_content(); ?>
				 <?php// endwhile;?>
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