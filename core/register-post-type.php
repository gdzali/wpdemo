<?php

function register_course() {

	$labels = array(
		'name'                  => _x( 'Courses', 'Post Type General Name', 'aligdz_theme' ),
		'singular_name'         => _x( 'Course', 'Post Type Singular Name', 'aligdz_theme' ),
		'menu_name'             => __( 'Course', 'aligdz_theme' ),
		'name_admin_bar'        => __( 'Course', 'aligdz_theme' ),
		'archives'              => __( 'Item Archives', 'aligdz_theme' ),
		'attributes'            => __( 'Item Attributes', 'aligdz_theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'aligdz_theme' ),
		'all_items'             => __( 'All Items', 'aligdz_theme' ),
		'add_new_item'          => __( 'Add New Item', 'aligdz_theme' ),
		'add_new'               => __( 'Add New', 'aligdz_theme' ),
		'new_item'              => __( 'New Item', 'aligdz_theme' ),
		'edit_item'             => __( 'Edit Item', 'aligdz_theme' ),
		'update_item'           => __( 'Update Item', 'aligdz_theme' ),
		'view_item'             => __( 'View Item', 'aligdz_theme' ),
		'view_items'            => __( 'View Items', 'aligdz_theme' ),
		'search_items'          => __( 'Search Item', 'aligdz_theme' ),
		'not_found'             => __( 'Not found', 'aligdz_theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'aligdz_theme' ),
		'featured_image'        => __( 'Featured Image', 'aligdz_theme' ),
		'set_featured_image'    => __( 'Set featured image', 'aligdz_theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'aligdz_theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'aligdz_theme' ),
		'insert_into_item'      => __( 'Insert into item', 'aligdz_theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'aligdz_theme' ),
		'items_list'            => __( 'Items list', 'aligdz_theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'aligdz_theme' ),
		'filter_items_list'     => __( 'Filter items list', 'aligdz_theme' ),
	);
	$args = array(
		'label'                 => __( 'Course', 'aligdz_theme' ),
		'description'           => __( 'Course Description', 'aligdz_theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'course_type', ' campus' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'course', $args );

}
add_action( 'init', 'register_course', 0 );

?>
