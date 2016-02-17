<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eh
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/animate.css"/>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/icons/style.css"/>

<!-- slick carousel -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/js/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/js/slick/slick-theme.css"/>
<link href='https://fonts.googleapis.com/css?family=Roboto:200,400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eh' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="container">
			<div class="off-state"></div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				
				<a class="logo" href="http://localhost/eh_wordpress/">
					EH
				</a>				
				<button class="menu-toggle icon-menu" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'eh' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->			
		</div>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
