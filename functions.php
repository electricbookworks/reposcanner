<?php
/**
 * Theme functions and definitions, based largely on Wordpress Twenty Fourteen
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * @package WordPress
 * @subpackage reposcanner
 * @since Repo Scanner 1.0
 */

if ( ! function_exists( 'reposcanner_setup' ) ) :
/**
 * Repo Scanner setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since Repo Scanner 1.0
 */
function reposcanner_setup() {

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'reposcanner-full-width', 1038, 576, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'   => __( 'Top menu', 'reposcanner' ),
		'sidebar' => __( 'Sidebar menu', 'reposcanner' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );
}
endif; // reposcanner_setup
add_action( 'after_setup_theme', 'reposcanner_setup' );

/**
* Add theme support for infinite scroll.
*/
add_theme_support( 'infinite-scroll', array(
    'container' => 'archive',
    'footer' => 'footer',
    'wrapper' => false,
    'posts_per_page' => 30,
) );


/**
 * Register our sidebars and widgetized areas.
 */
register_sidebar(array(
	'name'		=> __( 'Sidebar', 'reposcanner' ),
	'id'            => "sidebar",
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li class="widget">',
	'after_widget'  => "</li>\n",
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => "</h2>\n",
) );
	
register_sidebar(array(
	'name'		=> __( 'Footer', 'reposcanner' ),
	'id'            => "footer",
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li class="widget">',
	'after_widget'  => "</li>\n",
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => "</h2>\n",
) );

/**
 * Remove scroll on clicking more link
 */
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

/**
 * Manage the 'read more' link text
 */
add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
return '<a class="more-link" href="' . get_permalink() . '">More</a>';
}