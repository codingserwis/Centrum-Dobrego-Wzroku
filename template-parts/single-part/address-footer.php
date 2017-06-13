<?php 
	$f_address_title 		= get_field('office-name');
	$f_address_street 		= get_field('office-street');
	$f_address_zip 			= get_field('office-zip-code');
	$f_address_town 		= get_field('office-town');
	$f_address_phone 		= get_field('office-phone-n');
	$f_address_phone_link	= str_replace(' ', '', $f_address_phone);
	$f_address_mail 		= get_field('office-mail');
?>

<h3 class="f_box_heading"><?php echo $f_address_title;?></h3>
<hr class="orange-underscore">
<address class="f-address">
	<ul class="white_address-info">
		<li>
			<i class="fa fa-map-marker" aria-hidden="true"></i> ul. <?php echo $f_address_street; ?>
		</li>
		<li>
			<span><?php echo $f_address_zip; ?></span>
			<span><?php echo $f_address_town; ?></span>
		</li>
	</li>
	<li>
		<i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:<?php echo $f_address_phone_link; ?>"><?php echo $f_address_phone; ?></a></li>
		<li>
			<i class="fa fa-envelope-open-o" aria-hidden="true"></i><a href="mailto:<?php echo $f_address_mail; ?>"><?php echo $f_address_mail; ?></a></li>
		</ul>
</address>