<?php
// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 960;

if ( ! function_exists('quen_setups') ) {

// Register Theme Features
function quen_setups()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails', array( 'bds', 'post') );

	 // Set custom thumbnail dimensions
	set_post_thumbnail_size( 1280, 960, true );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style();
}
add_action( 'after_setup_theme', 'quen_setups' );

}