<div class="post">
	
	<div id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
	<?php the_post(); ?>

		<?php edit_post_link( '&#9998;' ); ?>
		<a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_title( '<h2 class="post-title">', '</h2>' )?>
		</a>

		<?php the_content(); ?>

	</div><!--.<?php post_class(); ?>-->

</div><!--.post-->