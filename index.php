<?php
/**
 * Blocking direct access to your theme PHP files for security
 */
	defined('ABSPATH') or die("No script kiddies please!");

get_header();
get_sidebar();

?>
<div id="archive">
<?php
get_template_part( 'loop' ); 
?>

<div class="pagination">
<?php
/**
 * Paginate: https://codex.wordpress.org/Function_Reference/paginate_links
 */
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
?>
</div><!--.pagination-->

</div><!--#archive-->
<?php
get_footer();
?>