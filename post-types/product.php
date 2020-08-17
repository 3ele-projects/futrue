<?php

/**
 * Registers the `product` post type.
 */
function product_init() {
	register_post_type( 'product', array(
		'labels'                => array(
			'name'                  => __( 'Products', 'futrue' ),
			'singular_name'         => __( 'Product', 'futrue' ),
			'all_items'             => __( 'All Products', 'futrue' ),
			'archives'              => __( 'Product Archives', 'futrue' ),
			'attributes'            => __( 'Product Attributes', 'futrue' ),
			'insert_into_item'      => __( 'Insert into product', 'futrue' ),
			'uploaded_to_this_item' => __( 'Uploaded to this product', 'futrue' ),
			'featured_image'        => _x( 'Featured Image', 'product', 'futrue' ),
			'set_featured_image'    => _x( 'Set featured image', 'product', 'futrue' ),
			'remove_featured_image' => _x( 'Remove featured image', 'product', 'futrue' ),
			'use_featured_image'    => _x( 'Use as featured image', 'product', 'futrue' ),
			'filter_items_list'     => __( 'Filter products list', 'futrue' ),
			'items_list_navigation' => __( 'Products list navigation', 'futrue' ),
			'items_list'            => __( 'Products list', 'futrue' ),
			'new_item'              => __( 'New Product', 'futrue' ),
			'add_new'               => __( 'Add New', 'futrue' ),
			'add_new_item'          => __( 'Add New Product', 'futrue' ),
			'edit_item'             => __( 'Edit Product', 'futrue' ),
			'view_item'             => __( 'View Product', 'futrue' ),
			'view_items'            => __( 'View Products', 'futrue' ),
			'search_items'          => __( 'Search products', 'futrue' ),
			'not_found'             => __( 'No products found', 'futrue' ),
			'not_found_in_trash'    => __( 'No products found in trash', 'futrue' ),
			'parent_item_colon'     => __( 'Parent Product:', 'futrue' ),
			'menu_name'             => __( 'Products', 'futrue' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor','thumbnail', 'excerpt' ),
		'has_archive'           => true,
		'rewrite' => [
			'slug' => '/',
			'with_front' => true
],
		'query_var'             => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_rest'          => true,
		'rest_base'             => 'product',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'product_init' );
/*

*/
/**
 * Sets the post updated messages for the `product` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `product` post type.
 */
function product_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['product'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Product updated. <a target="_blank" href="%s">View product</a>', 'futrue' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'futrue' ),
		3  => __( 'Custom field deleted.', 'futrue' ),
		4  => __( 'Product updated.', 'futrue' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Product restored to revision from %s', 'futrue' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Product published. <a href="%s">View product</a>', 'futrue' ), esc_url( $permalink ) ),
		7  => __( 'Product saved.', 'futrue' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Product submitted. <a target="_blank" href="%s">Preview product</a>', 'futrue' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Product scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview product</a>', 'futrue' ),
		date_i18n( __( 'M j, Y @ G:i', 'futrue' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Product draft updated. <a target="_blank" href="%s">Preview product</a>', 'futrue' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'product_updated_messages' );
