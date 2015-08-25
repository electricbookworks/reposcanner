<?php
/**
 * Blocking direct access to theme PHP files for security
 */
	defined('ABSPATH') or die("No script kiddies please!");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
xmlns:fb="http://ogp.me/ns/fb#"
<?php language_attributes(); ?>
>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, right); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body>

<div id="debug">
</div><!--#debug-->

    <div id="wrapper">

		<div id="header">
			<div class="search">
				<?php get_search_form(); ?>
			</div><!--.search-->
			<div class="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'top' ) ); ?>
			</div><!--.navigation-->
			<div class="branding">
				<a href="<?php echo site_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
			</div><!--.branding-->
		</div><!--#header -->
		
        <div class="content">