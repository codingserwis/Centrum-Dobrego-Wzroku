<?php 
	$address_title 		= get_field('office-name');
	$address_street 	= get_field('office-street');
	$address_zip 		= get_field('office-zip-code');
	$address_town 		= get_field('office-town');
	$address_phone 		= get_field('office-phone-n');
	$address_phone_link = str_replace(' ', '', $address_phone);
	$address_mail 		= get_field('office-mail');
?>


<address>
	<?php if($address_title == 'Centrum Dobrego Wzroku Niemodlińska'){ ?>
		<h3 class="address-heading-left"><?php echo $address_title;?></h3>
		<hr class="orange-underscore-left">
		<ul class="address-info a-left">
	<?php } elseif($address_title == 'Centrum Dobrego Wzroku Ozimska') { ?>
		<h3 class="address-heading-right"><?php echo $address_title;?></h3>
		<hr class="orange-underscore-right">
		<ul class="address-info a-right">
	<?php } ?>
		<li>
			<i class="fa fa-map-marker" aria-hidden="true"></i>
			ul. <?php echo $address_street; ?>
		</li>
		<li>
			<span><?php echo $address_zip; ?></span>
			<span><?php echo $address_town; ?></span>
		</li>
		<li>
			<i class="fa fa-mobile" aria-hidden="true"></i>
			<a href="tel:<?php echo $address_phone_link; ?>">
				<?php echo $address_phone; ?>
			</a>
		</li>
		<li>
			<i class="fa fa-envelope-open-o" aria-hidden="true"></i>
			<a href="mailto:<?php echo $first_email; ?>">
				<?php echo $address_mail; ?>
			</a>
		</li>
	</ul>
</address>