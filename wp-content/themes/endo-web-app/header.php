<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Endo_Web_App
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="app" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'endo-web-app'); ?></a>

		<div class="side-wrapper">
			<div class="site-branding">
				<h1 class="site-title"><a class="logo" href="<?php echo esc_url(home_url()); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			</div><!-- .site-branding -->

			<div class="navigation-wrapper">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'endo-web-app'); ?></button>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					));
					?>
				</nav><!-- #site-navigation -->
			</div>

		</div>

		<div class="app-wrapper">
			<header id="masthead" class="site-header">
				<div class="secondary-navigation-wrapper">
					<?php $user = wp_get_current_user(); ?>
					Hi, <?php echo $user->display_name; ?> <span class="sep">|</span> <a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
				</div>

			</header><!-- #masthead -->

			<div id="content" class="site-content">