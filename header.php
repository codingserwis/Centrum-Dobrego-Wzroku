<?php 
/* Header for the theme: Centrum Dobrego Wzroku
 *	
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Centrum Dobrego Wzroku, salony optyczne, salon optyczny, lekarz opole, lekarz okulista, lekarz okulista opole, prywatny gabinet lekarski, prywatne gabinety lekarskie, okulary, okulary korekcyjne, okulary przeciwsłoneczne, okulary dla dzieci">
		<link href="https://fonts.googleapis.com/css?family=Nunito:300|Roboto:300&amp;subset=latin-ext" rel="stylesheet">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/assets/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/assets/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php bloginfo('template_directory');?>/assets/favicon/manifest.json">
		<link rel="mask-icon" href="<?php bloginfo('template_directory');?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/assets/favicon/favicon.ico">
		<meta name="msapplication-config" content="<?php bloginfo('template_directory');?>/assets/favicon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
		<script src="https://use.fontawesome.com/b1f95d1c43.js"></script>
		<title><?php bloginfo('name'); ?></title>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89931638-4', 'auto');
  ga('send', 'pageview');

</script>
		<?php wp_head(); ?>
	</head>
	<body>
		<header class="header">
			<div class="header_container">
				<div class="row">
					<div class="fast-contact">
						<h3 class="top-contact-heading">przyjdź do salonu</h3>
						<h3 class="top-contact-heading">i umów się na wizytę</h3>
						<ul class="fast-contact-list">
							<li class="fast-con-left">
								<a class="top-contact-link" href="tel:+48666666666">
									Salon Ozimska: +48 77 454 95 34
								</a>
							</li>
							<li class="fast-con-right">
								<a class="top-contact-link" href="tel:+48666666666">
									Salon Niemodlińska: +48 791 427267
								</a>
							</li>
						</ul>
					</div>
					<div class="top-logo">
						<a href="<?php bloginfo('url'); ?>">
							<img src="<?php bloginfo('template_directory');?>/assets/images/top_logo.jpg">
						</a>
					</div>
					<div class="top_heading">
						<h1>centrum dobrego wzroku</h1>
						<h1>okulista - optyk</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<nav class="main_nav">
					<?php wp_nav_menu(array(
									'menu' => 'header_menu',
									'theme_location' => 'header_menu',
									'menu_id' => 'main_menu',
									'container' => 'div',
									'container_id' => 'nav',
									'container_class' => 'nav_container',
								)
				); ?>
				</nav>
			</div>
		</header>