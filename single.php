<?php
/**
 * Blocking direct access to your theme PHP files for security
 */
	defined('ABSPATH') or die("No script kiddies please!");

get_header();
get_sidebar();

?>
<div class="single">
<?php
get_template_part( 'loop' ); 
?>
</div><!--.single-->
<?php
get_footer();
?>