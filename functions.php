<?php
function _s_scripts() {
	wp_enqueue_style( 'meetup-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );