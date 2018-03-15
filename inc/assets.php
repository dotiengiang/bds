<?php
// Register Style
function quen_styles() {

	//wp_enqueue_style( '', get_template_directory_uri() . '/assets/css/.css', false, '' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '4.0' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css', false, '1.0' );

	//wp_enqueue_script( '', get_template_directory_uri() . '/assets/js/.js', array(), '', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'quen_styles' );