<?php
/**
 * Custom post types for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package eshop
 */

function eshop_post_types() {

	/**
	 * Post Type: Slides.
	 */

	$labels = array(
		"name"                  => __( "Sliders", "eshop" ),
		"singular_name"         => __( "Slider", "eshop" ),
		'menu_name'             => __( 'Homepage Sliders', 'eshop' ),
		'name_admin_bar'        => __( 'Slider', 'eshop' ),
		'archives'              => __( 'Slider Archives', 'eshop' ),
		'attributes'            => __( 'Slider Attributes', 'eshop' ),
		'parent_item_colon'     => __( 'Parent Slider:', 'eshop' ),
		'all_items'             => __( 'All Sliders', 'eshop' ),
		'add_new_item'          => __( 'Add New Slider', 'eshop' ),
		'add_new'               => __( 'Add New', 'eshop' ),
		'new_item'              => __( 'New Slider', 'eshop' ),
		'edit_item'             => __( 'Edit Slider', 'eshop' ),
		'update_item'           => __( 'Update Slider', 'eshop' ),
		'view_item'             => __( 'View Slider', 'eshop' ),
		'view_items'            => __( 'View Sliders', 'eshop' ),
		'search_items'          => __( 'Search Slider', 'eshop' ),
		'not_found'             => __( 'Not found', 'eshop' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'eshop' ),
		'featured_image'        => __( 'Featured Image', 'eshop' ),
		'set_featured_image'    => __( 'Set featured image', 'eshop' ),
		'remove_featured_image' => __( 'Remove featured image', 'eshop' ),
		'use_featured_image'    => __( 'Use as featured image', 'eshop' ),
		'insert_into_item'      => __( 'Insert into Slider', 'eshop' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Slider', 'eshop' ),
		'items_list'            => __( 'Items list', 'eshop' ),
		'items_list_navigation' => __( 'Items list navigation', 'eshop' ),
		'filter_items_list'     => __( 'Filter Sliders list', 'eshop' ),

	);

	$args = array(
		"label"                 => __( "Sliders", "eshop" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"delete_with_user"      => false,
		"show_in_rest"          => false,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => false,
		"show_in_menu"          => "custom-menu.php",
		"show_in_nav_menus"     => true,
		"exclude_from_search"   => true,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"rewrite"               => array( "slug" => "slider", "with_front" => true ),
		"query_var"             => true,
		"menu_icon"             => "dashicons-images-alt",
		"supports"              => array( "title" ),
	);

	register_post_type( "slider", $args );

	/**
	 * Post Type: Promo Banners.
	 */

	$labels = array(
		"name"                  => __( "Banners", "eshop" ),
		"singular_name"         => __( "Banner", "eshop" ),
		'menu_name'             => __( 'Homepage Banners', 'eshop' ),
		'name_admin_bar'        => __( 'Banner', 'eshop' ),
		'archives'              => __( 'Banner Archives', 'eshop' ),
		'attributes'            => __( 'Banner Attributes', 'eshop' ),
		'parent_item_colon'     => __( 'Parent Banner:', 'eshop' ),
		'all_items'             => __( 'All Banners', 'eshop' ),
		'add_new_item'          => __( 'Add New Banner', 'eshop' ),
		'add_new'               => __( 'Add New', 'eshop' ),
		'new_item'              => __( 'New Banner', 'eshop' ),
		'edit_item'             => __( 'Edit Banner', 'eshop' ),
		'update_item'           => __( 'Update Banner', 'eshop' ),
		'view_item'             => __( 'View Banner', 'eshop' ),
		'view_items'            => __( 'View Banners', 'eshop' ),
		'search_items'          => __( 'Search Banner', 'eshop' ),
		'not_found'             => __( 'Not found', 'eshop' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'eshop' ),
		'featured_image'        => __( 'Featured Image', 'eshop' ),
		'set_featured_image'    => __( 'Set featured image', 'eshop' ),
		'remove_featured_image' => __( 'Remove featured image', 'eshop' ),
		'use_featured_image'    => __( 'Use as featured image', 'eshop' ),
		'insert_into_item'      => __( 'Insert into Banner', 'eshop' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Banner', 'eshop' ),
		'items_list'            => __( 'Items list', 'eshop' ),
		'items_list_navigation' => __( 'Items list navigation', 'eshop' ),
		'filter_items_list'     => __( 'Filter Banners list', 'eshop' ),

	);

	$args = array(
		"label"                 => __( "Banners", "eshop" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"delete_with_user"      => false,
		"show_in_rest"          => false,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => false,
		"show_in_menu"          => "custom-menu.php",
		"show_in_nav_menus"     => true,
		"exclude_from_search"   => true,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"rewrite"               => array( "slug" => "banner", "with_front" => true ),
		"query_var"             => true,
		"menu_icon"             => "dashicons-align-center",
		"supports"              => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "banner", $args );

	/**
	 * Post Type: Promo Parallex.
	 */

	$labels = array(
		"name"                  => __( "Parallexes", "eshop" ),
		"singular_name"         => __( "Parallex", "eshop" ),
		'menu_name'             => __( 'Homepage Parallexes', 'eshop' ),
		'name_admin_bar'        => __( 'Parallex', 'eshop' ),
		'archives'              => __( 'Parallex Archives', 'eshop' ),
		'attributes'            => __( 'Parallex Attributes', 'eshop' ),
		'parent_item_colon'     => __( 'Parent Parallex:', 'eshop' ),
		'all_items'             => __( 'All Parallexes', 'eshop' ),
		'add_new_item'          => __( 'Add New Parallex', 'eshop' ),
		'add_new'               => __( 'Add New', 'eshop' ),
		'new_item'              => __( 'New Parallex', 'eshop' ),
		'edit_item'             => __( 'Edit Parallex', 'eshop' ),
		'update_item'           => __( 'Update Parallex', 'eshop' ),
		'view_item'             => __( 'View Parallex', 'eshop' ),
		'view_items'            => __( 'View Parallexes', 'eshop' ),
		'search_items'          => __( 'Search Parallex', 'eshop' ),
		'not_found'             => __( 'Not found', 'eshop' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'eshop' ),
		'featured_image'        => __( 'Featured Image', 'eshop' ),
		'set_featured_image'    => __( 'Set featured image', 'eshop' ),
		'remove_featured_image' => __( 'Remove featured image', 'eshop' ),
		'use_featured_image'    => __( 'Use as featured image', 'eshop' ),
		'insert_into_item'      => __( 'Insert into Parallex', 'eshop' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Parallex', 'eshop' ),
		'items_list'            => __( 'Items list', 'eshop' ),
		'items_list_navigation' => __( 'Items list navigation', 'eshop' ),
		'filter_items_list'     => __( 'Filter Parallexes list', 'eshop' ),

	);

	$args = array(
		"label"                 => __( "Parallexes", "eshop" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"delete_with_user"      => false,
		"show_in_rest"          => false,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => false,
		"show_in_menu"          => "custom-menu.php",
		"show_in_nav_menus"     => true,
		"exclude_from_search"   => true,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"rewrite"               => array( "slug" => "parallex", "with_front" => true ),
		"query_var"             => true,
		"menu_icon"             => "dashicons-align-center",
		"supports"              => array( "title", "thumbnail" ),
	);

	register_post_type( "parallex", $args );

	/**
	 * Post Type: Blogs.
	 */

	$labels = array(
		"name"                  => __( "Blogs", "eshop" ),
		"singular_name"         => __( "Blog", "eshop" ),
		'menu_name'             => __( 'Homepage Blogs', 'eshop' ),
		'name_admin_bar'        => __( 'Blog', 'eshop' ),
		'archives'              => __( 'Blog Archives', 'eshop' ),
		'attributes'            => __( 'Blog Attributes', 'eshop' ),
		'parent_item_colon'     => __( 'Parent Blog:', 'eshop' ),
		'all_items'             => __( 'All Blogs', 'eshop' ),
		'add_new_item'          => __( 'Add New Blog', 'eshop' ),
		'add_new'               => __( 'Add New', 'eshop' ),
		'new_item'              => __( 'New Blog', 'eshop' ),
		'edit_item'             => __( 'Edit Blog', 'eshop' ),
		'update_item'           => __( 'Update Blog', 'eshop' ),
		'view_item'             => __( 'View Blog', 'eshop' ),
		'view_items'            => __( 'View Blogs', 'eshop' ),
		'search_items'          => __( 'Search Blog', 'eshop' ),
		'not_found'             => __( 'Not found', 'eshop' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'eshop' ),
		'featured_image'        => __( 'Featured Image', 'eshop' ),
		'set_featured_image'    => __( 'Set featured image', 'eshop' ),
		'remove_featured_image' => __( 'Remove featured image', 'eshop' ),
		'use_featured_image'    => __( 'Use as featured image', 'eshop' ),
		'insert_into_item'      => __( 'Insert into Blog', 'eshop' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Blog', 'eshop' ),
		'items_list'            => __( 'Items list', 'eshop' ),
		'items_list_navigation' => __( 'Items list navigation', 'eshop' ),
		'filter_items_list'     => __( 'Filter Blogs list', 'eshop' ),

	);

	$args = array(
		"label"                 => __( "Blogs", "eshop" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"delete_with_user"      => false,
		"show_in_rest"          => false,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => false,
		"show_in_menu"          => "custom-menu.php",
		"show_in_nav_menus"     => true,
		"exclude_from_search"   => true,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"rewrite"               => array( "slug" => "Blog", "with_front" => true ),
		"query_var"             => true,
		"menu_icon"             => "dashicons-align-center",
		"supports"              => array( "title", "editor" ),
	);

	register_post_type( "Blog", $args );
}

add_action( 'init', 'eshop_post_types' );
