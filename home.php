<?php
/* Template name: Home */

// Custom fields vars
	$first_section_title 	= get_field('first-section-title');
	$second_section_title 	= get_field('second-section-title');

get_header(); ?>
<main>
<section class="slider">
	<?php echo do_shortcode('[metaslider id=10]'); ?>
</section>
<section class="services"> 
	<div class="container">
		<div class="row">
			<h1 class="section-heading-blue">
			<?php echo $first_section_title ?>
			</h1>
		</div>
		<?php get_template_part('template-parts/home-page-services') ?>
	</div> <!-- end container -->
</section> <!-- end SERVICES -->
<section class="brands">
	<div class="container">
		<div class="row">
			<?php echo do_shortcode('[carousel_slide id="44"]'); ?>
		</div>
	</div><!-- end container -->
</section><!-- end BRANDS -->
<section class="news">
	<div class="container news-container">
		<div class="row">
			<div class="news-box">
				<h2 class="hours-heading">Lekarz radzi</h2>
				<?php get_template_part('template-parts/news'); ?>
				<a class="btn-more-white pos-abs" href="<?php bloginfo('url'); ?>/aktualnosci">Więcej</a>
			</div>
			<div class="news-hours lblue-bcg">
				<?php get_template_part('template-parts/offices-hours-ozimska'); ?>
			</div>
			<div class="news-hours dblue-bcg">
				<?php get_template_part('template-parts/offices-hours-niemodlinska'); ?>
			</div>
		</div>
	</div><!-- end container-->
</section><!-- end NEWS -->
<section class="contact-heading">
	<div class="container">
		<div class="row">
			<h1><?php echo $second_section_title?></h1>
		</div>
	</div><!-- end container -->
</section><!-- end CONTACT HEADING -->
<section class="contact">
	<div class="container">
		<div class="row">
			<div class="address-box f_left">
				<?php get_template_part('template-parts/offices-address-niemodlinska'); ?>
			</div>
			<div class="address-box f_right">
				<?php get_template_part('template-parts/offices-address-ozimska'); ?>
		</div>
	</div>
</div><!-- end container -->
<div class="container">
	<div class="row">
		<div class="g_map">
			<?php echo do_shortcode('[wpgmza id="1"]'); ?>
		</div>
	</div>
</div><!-- end container -->
</section><!-- end CONTACT -->
<?php get_footer(); ?>