<?php
/**
 * Functions to register client-side assets (scripts and stylesheets) for the
 * Gutenberg block.
 *
 * @package futrue
 */

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * @see https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/block-tutorial/applying-styles-with-stylesheets/
 */
function futrue_slider_block_init() {
	// Skip block registration if Gutenberg is not enabled/merged.
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}
	$dir = get_template_directory() . '/blocks';

	$index_js = 'futrue-slider/index.js';
	wp_register_script(
		'futrue-slider-block-editor',
		get_template_directory_uri() . "/blocks/$index_js",
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		),
		filemtime( "$dir/$index_js" )
	);

	$editor_css = 'futrue-slider/editor.css';
	wp_register_style(
		'futrue-slider-block-editor',
		get_template_directory_uri() . "/blocks/$editor_css",
		array(),
		filemtime( "$dir/$editor_css" )
	);

	$style_css = 'futrue-slider/style.css';
	wp_register_style(
		'futrue-slider-block',
		get_template_directory_uri() . "/blocks/$style_css",
		array(),
		filemtime( "$dir/$style_css" )
	);

	register_block_type( 'futrue/futrue-slider', array(
		'editor_script' => 'futrue-slider-block-editor',
		'editor_style'  => 'futrue-slider-block-editor',
		'style'         => 'futrue-slider-block',
	) );
}
add_action( 'init', 'futrue_slider_block_init' );
