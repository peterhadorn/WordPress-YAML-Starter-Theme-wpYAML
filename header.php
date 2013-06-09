<?php
/**
 * WP YAML Wordpress starter theme
 *
 * Template for displaying the header
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 */
?>
<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/lib/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header role="banner">
			<div class="ym-wrapper"> 
				<div class="header">
					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<h1 id="logo"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>
				</div>
			</div> 
		</header>			
		<!-- Main navigation bar using YAML hlist -->
		<nav role="navigation" class="ym-hlist headernav">
			<div class="ym-wrapper"> 
				<?php wpyaml_main_nav(); ?>
			</div> 
		</nav>
		<!-- Main Area Layout Wrapper -->
		<div id="content">
			<div class="ym-wrapper">