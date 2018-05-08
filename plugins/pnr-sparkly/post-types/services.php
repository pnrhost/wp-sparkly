<?php

function services_init() {
	register_post_type( 'services', array(
		'labels'            => array(
			'name'                => __( 'Services', 'pnr-sparkly' ),
			'singular_name'       => __( 'Service', 'pnr-sparkly' ),
			'all_items'           => __( 'All Services', 'pnr-sparkly' ),
			'new_item'            => __( 'New Service', 'pnr-sparkly' ),
			'add_new'             => __( 'Add New', 'pnr-sparkly' ),
			'add_new_item'        => __( 'Add New Service', 'pnr-sparkly' ),
			'edit_item'           => __( 'Edit Service', 'pnr-sparkly' ),
			'view_item'           => __( 'View Service', 'pnr-sparkly' ),
			'search_items'        => __( 'Search Services', 'pnr-sparkly' ),
			'not_found'           => __( 'No Services found', 'pnr-sparkly' ),
			'not_found_in_trash'  => __( 'No Services found in trash', 'pnr-sparkly' ),
			'parent_item_colon'   => __( 'Parent Service', 'pnr-sparkly' ),
			'menu_name'           => __( 'Services', 'pnr-sparkly' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-admin-post',
		'show_in_rest'      => true,
		'rest_base'         => 'services',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'services_init' );

function services_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['services'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Service updated. <a target="_blank" href="%s">View Service</a>', 'pnr-sparkly'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'pnr-sparkly'),
		3 => __('Custom field deleted.', 'pnr-sparkly'),
		4 => __('Service updated.', 'pnr-sparkly'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Service restored to revision from %s', 'pnr-sparkly'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Service published. <a href="%s">View Service</a>', 'pnr-sparkly'), esc_url( $permalink ) ),
		7 => __('Service saved.', 'pnr-sparkly'),
		8 => sprintf( __('Service submitted. <a target="_blank" href="%s">Preview Service</a>', 'pnr-sparkly'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Service scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Service</a>', 'pnr-sparkly'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Service draft updated. <a target="_blank" href="%s">Preview Service</a>', 'pnr-sparkly'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'services_updated_messages' );
