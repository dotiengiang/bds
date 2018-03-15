<?php


if ( ! function_exists( 'quen_breadcrumb' ) ) {

	// Register Navigation Menus
	function quen_breadcrumb() {

		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('
			<p id="breadcrumbs" class="text-secondary p-2 border border-light">','</p>
			');
		}

	}

}

if ( ! function_exists( 'quen_pagination' ) ) {

	// Register Navigation Menus
	function quen_pagination() {

		the_posts_pagination( array(
			'prev_text'          => __( 'Trang trước', 'quen' ),
			'next_text'          => __( 'Trang sau', 'quen' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Trang', 'quen' ) . ' </span>',
		) );

	}

}

