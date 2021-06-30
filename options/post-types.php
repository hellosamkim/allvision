<?php

# Location
register_post_type( 'app_location', array(
	'labels'              => array(
		'name'               => __( 'Locations', 'app' ),
		'singular_name'      => __( 'Location', 'app' ),
		'all_items'          => __( 'All Locations', 'app' ),
		'add_new'            => __( 'Add New', 'app' ),
		'add_new_item'       => __( 'Add new Location', 'app' ),
		'view_item'          => __( 'View Location', 'app' ),
		'edit_item'          => __( 'Edit Location', 'app' ),
		'new_item'           => __( 'New Location', 'app' ),
		'search_items'       => __( 'Search Locations', 'app' ),
		'not_found'          => __( 'No Locations found', 'app' ),
		'not_found_in_trash' => __( 'No Locations found in trash', 'app' ),
	),
	'public'              => true,
	'exclude_from_search' => false,
	'show_ui'             => true,
	'capability_type'     => 'post',
	'hierarchical'        => false,
	'_edit_link'          => 'post.php?post=%d',
	'rewrite'             => array(
		'slug'       => 'location',
		'with_front' => false,
	),
	'query_var'           => true,
	'menu_icon'           => 'dashicons-location',
	'supports'            => array( 'title', 'thumbnail', 'page-attributes' ),
) );

/*
register_post_type( 'app_custom-type', array(
	'labels' => array(
		'name' => __( 'Custom Types', 'app' ),
		'singular_name' => __( 'Custom Type', 'app' ),
		'add_new' => __( 'Add New', 'app' ),
		'add_new_item' => __( 'Add new Custom Type', 'app' ),
		'view_item' => __( 'View Custom Type', 'app' ),
		'edit_item' => __( 'Edit Custom Type', 'app' ),
		'new_item' => __( 'New Custom Type', 'app' ),
		'view_item' => __( 'View Custom Type', 'app' ),
		'search_items' => __( 'Search Custom Types', 'app' ),
		'not_found' =>  __( 'No custom types found', 'app' ),
		'not_found_in_trash' => __( 'No custom types found in trash', 'app' ),
	),
	'public' => true,
	'exclude_from_search' => false,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'_edit_link' => 'post.php?post=%d',
	'rewrite' => array(
		'slug' => 'custom-type',
		'with_front' => false,
	),
	'query_var' => true,
	'menu_icon' => 'dashicons-admin-post',
	'supports' => array( 'title', 'editor', 'page-attributes' ),
) );
*/
