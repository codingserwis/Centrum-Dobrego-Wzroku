<header class="single-header">
	<h1>
	<?php the_title();?>
	</h1>
</header>
<div class="single-thumbnail">
	<?php the_post_thumbnail();?>
</div>
<div class="post-date">
	<?php echo get_the_date(); ?>
</div>
<hr class="orange_underscore archive-underscore">
<div class="single-header-blue">
	<h1>
	<?php the_title(); ?>
	</h1>
</div>
<div class="single-content">
	<?php the_content(); ?>
</div>