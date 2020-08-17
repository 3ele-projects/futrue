<?php

/**
 * Registers the `job` post type.
 */
function job_init() {
	register_post_type( 'job', array(
		'labels'                => array(
			'name'                  => __( 'Jobs', 'futrue' ),
			'singular_name'         => __( 'Job', 'futrue' ),
			'all_items'             => __( 'All Jobs', 'futrue' ),
			'archives'              => __( 'Job Archives', 'futrue' ),
			'attributes'            => __( 'Job Attributes', 'futrue' ),
			'insert_into_item'      => __( 'Insert into job', 'futrue' ),
			'uploaded_to_this_item' => __( 'Uploaded to this job', 'futrue' ),
			'featured_image'        => _x( 'Featured Image', 'job', 'futrue' ),
			'set_featured_image'    => _x( 'Set featured image', 'job', 'futrue' ),
			'remove_featured_image' => _x( 'Remove featured image', 'job', 'futrue' ),
			'use_featured_image'    => _x( 'Use as featured image', 'job', 'futrue' ),
			'filter_items_list'     => __( 'Filter jobs list', 'futrue' ),
			'items_list_navigation' => __( 'Jobs list navigation', 'futrue' ),
			'items_list'            => __( 'Jobs list', 'futrue' ),
			'new_item'              => __( 'New Job', 'futrue' ),
			'add_new'               => __( 'Add New', 'futrue' ),
			'add_new_item'          => __( 'Add New Job', 'futrue' ),
			'edit_item'             => __( 'Edit Job', 'futrue' ),
			'view_item'             => __( 'View Job', 'futrue' ),
			'view_items'            => __( 'View Jobs', 'futrue' ),
			'search_items'          => __( 'Search jobs', 'futrue' ),
			'not_found'             => __( 'No jobs found', 'futrue' ),
			'not_found_in_trash'    => __( 'No jobs found in trash', 'futrue' ),
			'parent_item_colon'     => __( 'Parent Job:', 'futrue' ),
			'menu_name'             => __( 'Jobs', 'futrue' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor' ),
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_rest'          => true,
		'rest_base'             => 'job',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'job_init' );

/**
 * Sets the post updated messages for the `job` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `job` post type.
 */
function job_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['job'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Job updated. <a target="_blank" href="%s">View job</a>', 'futrue' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'futrue' ),
		3  => __( 'Custom field deleted.', 'futrue' ),
		4  => __( 'Job updated.', 'futrue' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Job restored to revision from %s', 'futrue' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Job published. <a href="%s">View job</a>', 'futrue' ), esc_url( $permalink ) ),
		7  => __( 'Job saved.', 'futrue' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Job submitted. <a target="_blank" href="%s">Preview job</a>', 'futrue' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Job scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview job</a>', 'futrue' ),
		date_i18n( __( 'M j, Y @ G:i', 'futrue' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Job draft updated. <a target="_blank" href="%s">Preview job</a>', 'futrue' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'job_updated_messages' );
