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
function product_block_init() {
	// Skip block registration if Gutenberg is not enabled/merged.
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}
	$dir = get_template_directory() . '/blocks';

	$index_js = 'product/index.js';
	wp_register_script(
		'product-block-editor',
		get_template_directory_uri() . "/blocks/$index_js",
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		),
		filemtime( "$dir/$index_js" )
	);

	$editor_css = 'product/editor.css';
	wp_register_style(
		'product-block-editor',
		get_template_directory_uri() . "/blocks/$editor_css",
		array(),
		filemtime( "$dir/$editor_css" )
	);

	$style_css = 'product/style.css';
	wp_register_style(
		'product-block',
		get_template_directory_uri() . "/blocks/$style_css",
		array(),
		filemtime( "$dir/$style_css" )
	);

	register_block_type( 'futrue/product', array(
		'editor_script' => 'product-block-editor',
		'editor_style'  => 'product-block-editor',
		'style'         => 'product-block',
	) );
}
add_action( 'init', 'product_block_init' );
