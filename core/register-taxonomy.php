<?php

function course_tax_type_register() {

	$labels = array(
		'name'                       => _x( 'Course Types', 'Taxonomy General Name', 'aligdz_theme' ),
		'singular_name'              => _x( 'Course Type', 'Taxonomy Singular Name', 'aligdz_theme' ),
		'menu_name'                  => __( 'Course Type', 'aligdz_theme' ),
		'all_items'                  => __( 'All Items', 'aligdz_theme' ),
		'parent_item'                => __( 'Parent Item', 'aligdz_theme' ),
		'parent_item_colon'          => __( 'Parent Item:', 'aligdz_theme' ),
		'new_item_name'              => __( 'New Item Name', 'aligdz_theme' ),
		'add_new_item'               => __( 'Add New Item', 'aligdz_theme' ),
		'edit_item'                  => __( 'Edit Item', 'aligdz_theme' ),
		'update_item'                => __( 'Update Item', 'aligdz_theme' ),
		'view_item'                  => __( 'View Item', 'aligdz_theme' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'aligdz_theme' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'aligdz_theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'aligdz_theme' ),
		'popular_items'              => __( 'Popular Items', 'aligdz_theme' ),
		'search_items'               => __( 'Search Items', 'aligdz_theme' ),
		'not_found'                  => __( 'Not Found', 'aligdz_theme' ),
		'no_terms'                   => __( 'No items', 'aligdz_theme' ),
		'items_list'                 => __( 'Items list', 'aligdz_theme' ),
		'items_list_navigation'      => __( 'Items list navigation', 'aligdz_theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'meta_box_cb'							   => false
	);
	register_taxonomy( 'course_type', array( 'course' ), $args );

}
add_action( 'init', 'course_tax_type_register', 0 );

function course_tax_campus_register() {

	$labels = array(
		'name'                       => _x( 'Campuses', 'Taxonomy General Name', 'aligdz_theme' ),
		'singular_name'              => _x( 'Campus', 'Taxonomy Singular Name', 'aligdz_theme' ),
		'menu_name'                  => __( 'Campus', 'aligdz_theme' ),
		'all_items'                  => __( 'All Items', 'aligdz_theme' ),
		'parent_item'                => __( 'Parent Item', 'aligdz_theme' ),
		'parent_item_colon'          => __( 'Parent Item:', 'aligdz_theme' ),
		'new_item_name'              => __( 'New Item Name', 'aligdz_theme' ),
		'add_new_item'               => __( 'Add New Item', 'aligdz_theme' ),
		'edit_item'                  => __( 'Edit Item', 'aligdz_theme' ),
		'update_item'                => __( 'Update Item', 'aligdz_theme' ),
		'view_item'                  => __( 'View Item', 'aligdz_theme' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'aligdz_theme' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'aligdz_theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'aligdz_theme' ),
		'popular_items'              => __( 'Popular Items', 'aligdz_theme' ),
		'search_items'               => __( 'Search Items', 'aligdz_theme' ),
		'not_found'                  => __( 'Not Found', 'aligdz_theme' ),
		'no_terms'                   => __( 'No items', 'aligdz_theme' ),
		'items_list'                 => __( 'Items list', 'aligdz_theme' ),
		'items_list_navigation'      => __( 'Items list navigation', 'aligdz_theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'meta_box_cb'							   => false
	);
	register_taxonomy( 'campus', array( 'course' ), $args );

}
add_action( 'init', 'course_tax_campus_register', 0 );

?>
