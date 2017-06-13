<?php 
	$mon_open	= get_field('mon-open-hours');
	$mon_close	= get_field('mon-close-hours');
	$tu_open	= get_field('tu-open-hours');
	$tu_close	= get_field('tu-close-hours');
	$wed_open	= get_field('wed-open-hours');
	$wed_close	= get_field('wed-close-hours');
	$th_open	= get_field('th-open-hours');
	$th_close	= get_field('th-close-hours');
	$fr_open	= get_field('fr-open-hours');
	$fr_close	= get_field('fr-close-hours');
	$sa_open	= get_field('sat-open-hours');
	$sa_close	= get_field('sat-close-hours');
?>

<ul class="hours-list">
	<li class="row">
		<span class="left">Poniedziałek</span>
		<span class="right">
			<?php echo $mon_open; ?> - <?php echo $mon_close; ?>
		</span>
	</li>
	<li class="row">
		<span class="left">Wtorek</span>
		<span class="right">
			<?php echo $tu_open; ?> - <?php echo $tu_close; ?>
		</span>
	</li>
	<li class="row">
		<span class="left">Środa</span>
		<span class="right">
			<?php echo $wed_open; ?> - <?php echo $wed_close; ?>
		</span>
	</li>
	<li class="row">
		<span class="left">Czwartek</span>
		<span class="right">
			<?php echo $th_open; ?> - <?php echo $th_close; ?>
		</span>
	</li>
	<li class="row">
		<span class="left">Piątek</span>
		<span class="right">
			<?php echo $fr_open; ?> - <?php echo $fr_close; ?>
		</span>
	</li>
	<?php if( $sa_open != 'close' || $sa_close != 'close'){?>
		<li class="row">
			<span class="left">Sobota</span>
			<span class="right">
				<?php echo $sa_open; ?> - <?php echo $sa_close; ?>
			</span>
		</li>
	<?php } ?>
</ul>