<?php

/**
 * enque script
 * @author schurpf
 * @url     http://schurpf.com
 * @version 0.0
 * @date    2014-08-13
 * @return  none             
 */
function schurpf_scripts() {
	wp_enqueue_style( 'meetup-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'schurpf_scripts' );

/**
 * Register sidebar widget
 * @author schurpf
 * @url     http://schurpf.com
 * @version 0.0
 * @date    2014-08-13
 * @return  none             
 */
function schurpf_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'meetup' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'schurpf_widgets_init' );

/**
 * Theme setup function
 * @author schurpf
 * @url     http://schurpf.com
 * @version 0.0
 * @date    2014-08-13
 * @return  none             
 */
function schurpf_setup() {
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'meetup' ),
	) );
}
add_action( 'after_setup_theme', 'schurpf_setup' );