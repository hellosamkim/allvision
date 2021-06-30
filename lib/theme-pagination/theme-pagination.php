<?php
/**
 * Plugin Name: Theme Pagination
 * Description: A basic plugin for pagination with advanced capabilities for extending.
 * Version: 1.1.3
 * License: GPL2
 * Requires at least: 3.8
 * Tested up to: 4.5
 */

// allows the plugin to be included as a library in themes
if ( class_exists( 'Theme_Pagination' ) ) {
	return;
}

$includes_dir = dirname( __FILE__ ) . '/includes/';

// pagination classes
include_once( $includes_dir . 'paginations/Theme_Pagination.php' );
include_once( $includes_dir . 'paginations/Theme_Pagination_HTML.php' );
include_once( $includes_dir . 'paginations/Theme_Pagination_Posts.php' );
include_once( $includes_dir . 'paginations/Theme_Pagination_Post.php' );
include_once( $includes_dir . 'paginations/Theme_Pagination_Comments.php' );
include_once( $includes_dir . 'paginations/Theme_Pagination_Custom.php' );

// pagination item classes
include_once( $includes_dir . 'items/Theme_Pagination_Item.php' );
include_once( $includes_dir . 'items/Theme_Pagination_Item_Page.php' );
include_once( $includes_dir . 'items/Theme_Pagination_Item_Limiter.php' );
include_once( $includes_dir . 'items/Theme_Pagination_Item_HTML.php' );
include_once( $includes_dir . 'items/Theme_Pagination_Item_Current_Page_Text.php' );
include_once( $includes_dir . 'items/Theme_Pagination_Item_Direction_Page.php' );
include_once( $includes_dir . 'items/Theme_Pagination_Item_Direction_Backward_Page.php' );
include_once( $includes_dir . 'items/Theme_Pagination_Item_Direction_Forward_Page.php' );
include_once( $includes_dir . 'items/Theme_Pagination_Item_First_Page.php' );
include_once( $includes_dir . 'items/Theme_Pagination_Item_Previous_Page.php' );
include_once( $includes_dir . 'items/Theme_Pagination_Item_Next_Page.php' );
include_once( $includes_dir . 'items/Theme_Pagination_Item_Last_Page.php' );
include_once( $includes_dir . 'items/Theme_Pagination_Item_Number_Links.php' );

// misc classes - utlities, renderer, item collection
include_once( $includes_dir . 'misc/Theme_Pagination_Utilities.php' );
include_once( $includes_dir . 'misc/Theme_Pagination_Renderer.php' );
include_once( $includes_dir . 'misc/Theme_Pagination_Collection.php' );
include_once( $includes_dir . 'misc/Theme_Pagination_Presenter.php' );

// public functions
include_once( $includes_dir . 'functions.php' );