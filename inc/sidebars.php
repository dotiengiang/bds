<?php
if ( ! function_exists( 'quen_sidebars' ) ) {

// Register Sidebars
function quen_sidebars() {

	$args = array(
		'id'            => 'main-sidebar',
		'class'         => 'main-sidebar',
		'name'          => __( 'Cột bên', 'quen' ),
		'description'   => __( 'Cột trái nội dung chính', 'quen' ),
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'quen_sidebars' );

}