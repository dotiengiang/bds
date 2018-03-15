<?php
if ( ! function_exists( 'quen_menus' ) ) {

// Register Navigation Menus
function quen_menus() {

	$locations = array(
		'primary' => __( 'Thanh điều hướng chính', 'quen' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'quen_menus' );

}