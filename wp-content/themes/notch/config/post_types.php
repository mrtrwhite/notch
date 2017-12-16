<?php

/*
 * ==== THEME POST TYPES ====
 * Duplicate this block, replacing '[NAME]' with your post type name.
 */

function register_post_types() {
    $labels = array(
	   'name'               => _x( '[NAME]', 'post type general name', 'your-plugin-textdomain' ),
	   'singular_name'      => _x( '[NAME]', 'post type singular name', 'your-plugin-textdomain' ),
	   'menu_name'          => _x( '[NAME]', 'admin menu', 'your-plugin-textdomain' ),
	   'name_admin_bar'     => _x( '[NAME]', 'add new on admin bar', 'your-plugin-textdomain' ),
	   'add_new'            => _x( 'Add New', '[NAME]', 'your-plugin-textdomain' ),
	   'add_new_item'       => __( 'Add New [NAME]', 'your-plugin-textdomain' ),
	   'new_item'           => __( 'New [NAME]', 'your-plugin-textdomain' ),
	   'edit_item'          => __( 'Edit [NAME]', 'your-plugin-textdomain' ),
	   'view_item'          => __( 'View [NAME]', 'your-plugin-textdomain' ),
	   'all_items'          => __( 'All [NAME]', 'your-plugin-textdomain' ),
	   'search_items'       => __( 'Search [NAME]', 'your-plugin-textdomain' ),
	   'parent_item_colon'  => __( 'Parent [NAME]:', 'your-plugin-textdomain' ),
	   'not_found'          => __( 'No [NAME] found.', 'your-plugin-textdomain' ),
	   'not_found_in_trash' => __( 'No [NAME] found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
	   'labels'             => $labels,
	   'public'             => true,
	   'publicly_queryable' => true,
	   'show_ui'            => true,
	   'show_in_menu'       => true,
	   'query_var'          => true,
	   'capability_type'    => 'post',
	   'map_meta_cap'       => true,
	   'has_archive'        => false,
	   'hierarchical'       => false,
	   'menu_position'      => null,
	);

	// register_post_type('[NAME]', $args);
}
