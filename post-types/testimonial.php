<?php

/**
 * Registers the `testimonial` post type.
 */
function testimonial_init() {
	register_post_type( 'testimonial', array(
		'labels'                => array(
			'name'                  => __( 'Testimonials', 'futrue' ),
			'singular_name'         => __( 'Testimonial', 'futrue' ),
			'all_items'             => __( 'All Testimonials', 'futrue' ),
			'archives'              => __( 'Testimonial Archives', 'futrue' ),
			'attributes'            => __( 'Testimonial Attributes', 'futrue' ),
			'insert_into_item'      => __( 'Insert into testimonial', 'futrue' ),
			'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'futrue' ),
			'featured_image'        => _x( 'Featured Image', 'testimonial', 'futrue' ),
			'set_featured_image'    => _x( 'Set featured image', 'testimonial', 'futrue' ),
			'remove_featured_image' => _x( 'Remove featured image', 'testimonial', 'futrue' ),
			'use_featured_image'    => _x( 'Use as featured image', 'testimonial', 'futrue' ),
			'filter_items_list'     => __( 'Filter testimonials list', 'futrue' ),
			'items_list_navigation' => __( 'Testimonials list navigation', 'futrue' ),
			'items_list'            => __( 'Testimonials list', 'futrue' ),
			'new_item'              => __( 'New Testimonial', 'futrue' ),
			'add_new'               => __( 'Add New', 'futrue' ),
			'add_new_item'          => __( 'Add New Testimonial', 'futrue' ),
			'edit_item'             => __( 'Edit Testimonial', 'futrue' ),
			'view_item'             => __( 'View Testimonial', 'futrue' ),
			'view_items'            => __( 'View Testimonials', 'futrue' ),
			'search_items'          => __( 'Search testimonials', 'futrue' ),
			'not_found'             => __( 'No testimonials found', 'futrue' ),
			'not_found_in_trash'    => __( 'No testimonials found in trash', 'futrue' ),
			'parent_item_colon'     => __( 'Parent Testimonial:', 'futrue' ),
			'menu_name'             => __( 'Testimonials', 'futrue' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title' ),
		'has_archive'           => false,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_rest'          => true,
		'rest_base'             => 'testimonial',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'testimonial_init' );

/**
 * Sets the post updated messages for the `testimonial` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `testimonial` post type.
 */
function testimonial_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['testimonial'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Testimonial updated. <a target="_blank" href="%s">View testimonial</a>', 'futrue' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'futrue' ),
		3  => __( 'Custom field deleted.', 'futrue' ),
		4  => __( 'Testimonial updated.', 'futrue' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Testimonial restored to revision from %s', 'futrue' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Testimonial published. <a href="%s">View testimonial</a>', 'futrue' ), esc_url( $permalink ) ),
		7  => __( 'Testimonial saved.', 'futrue' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Testimonial submitted. <a target="_blank" href="%s">Preview testimonial</a>', 'futrue' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Testimonial scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview testimonial</a>', 'futrue' ),
		date_i18n( __( 'M j, Y @ G:i', 'futrue' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Testimonial draft updated. <a target="_blank" href="%s">Preview testimonial</a>', 'futrue' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'testimonial_updated_messages' );
