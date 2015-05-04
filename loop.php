<?php
if (have_posts()) :
	while (have_posts()) :
		get_template_part( 'content' );
		comments_template();
	endwhile;
endif;
?>