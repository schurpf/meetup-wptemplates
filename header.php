<?php
/**
 * The header for our theme.
 */
?><!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
</head>
<body>
	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="site-wrap">