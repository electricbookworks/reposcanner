<?php
/**
 * Blocking direct access to your theme PHP files for security
 */
	defined('ABSPATH') or die("No script kiddies please!");
?>

<div class="sidebar">
	<?php dynamic_sidebar( sidebar ); ?> 
</div><!--.sidebar-->
