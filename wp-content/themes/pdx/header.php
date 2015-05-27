<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package pdx
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Karla:400,700,700italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<svg class="hide"><symbol id="icon-location2" viewBox="0 0 1024 1024">
	<title>location2</title>
	<path class="path1" d="M512 0c-176.732 0-320 143.268-320 320 0 320 320 704 320 704s320-384 320-704c0-176.732-143.27-320-320-320zM512 512c-106.040 0-192-85.96-192-192s85.96-192 192-192 192 85.96 192 192-85.96 192-192 192z"></path>
</symbol></svg>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pdx' ); ?></a>

	<header class="header" role="banner">
		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Boot Scootin’ 2 <span>PDX</span></a>

		<a class="find-us" href="/location">
			<svg class="icon icon-location2"><use xlink:href="#icon-location2"></use></svg>
			
		<span>Track our location</span></a>

	</header>

	<div id="content" class="site-content">
