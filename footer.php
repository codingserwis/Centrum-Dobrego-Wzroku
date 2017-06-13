</main>
<footer>
	<div class="container">
		<div class="row">
			<div class="footer_box f_left">
				<?php get_template_part('template-parts/offices-address-niemodlinska-footer'); ?>
			</div>
			<div class="footer_box f_left">
				<?php get_template_part('template-parts/offices-address-ozimska-footer'); ?>
			</div>
			<div class="footer_box f_left">
				<h3 class="f_box_heading center_f_heading">Nasze Usługi</h3>
				<hr class="orange-underscore">
				<?php 
					wp_nav_menu(array(
							'menu'				=> 'footer_menu',
							'theme_location' 	=> 'footer_menu',
							'menu_id' 			=> 'footer_menu',
							'container' 		=> 'div',
							'container_id' 		=> 'nav',
							'container_class' 	=> 'footer_nav'
						));
				?>
			</div>
		</div>
		<div class="row">
			<div class="copy">
				<span>
					Centrum Dobrego Wzroku 2017 | Projekt i wykonanie Codingserwis.pl
				</span>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</footer>
<div class="social-box">
	<div class="fb-box">
		<a href="https://www.facebook.com/Opolskie-Centrum-Dobrego-Wzroku-718662898242858/?fref=ts">
			<i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
		</a>
	</div>
</div>
<div class="to-top-box">
	<a href="#top">
		<i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i>
	</a>
</div>
</body>
</html>