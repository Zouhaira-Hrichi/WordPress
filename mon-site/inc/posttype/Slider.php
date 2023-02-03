<?php
/**
 * Register a custom post type called "slider".
 *
 * @see get_post_type_labels() for label keys.
 */
function slider_init() {
	$labels = array(
		'name'                  => _x( 'slide-revolution', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'slide-revolution', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'slide-revolution', 'Admin Menu text', 'textdomain' ),
         'name_admin_bar'        => _x( 'slider', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New slider', 'textdomain' ),
		'new_item'              => __( 'New slider', 'textdomain' ),
		'edit_item'             => __( 'Edit slider', 'textdomain' ),
		'view_item'             => __( 'View slider', 'textdomain' ),
		'all_items'             => __( 'All sliders', 'textdomain' ),
		'search_items'          => __( 'Search sliders', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent sliders:', 'textdomain' ),
		'not_found'             => __( 'No sliders found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'slider', $args );
}

add_action( 'init', 'slider_init' );