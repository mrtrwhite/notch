<?php

/*
 * ==== THEME TAXONOMIES ====
 * Duplicate this block, replacing '[NAME]' with your taxonomy name.
 */

function register_taxonomies() {
    $labels = array(
		'name'              => _x( '[NAME] Category', 'taxonomy general name' ),
		'singular_name'     => _x( '[NAME] Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search [NAME] Category' ),
		'all_items'         => __( 'All [NAME] Categories' ),
		'parent_item'       => __( 'Parent [NAME] Category' ),
		'parent_item_colon' => __( 'Parent [NAME] Category:' ),
		'edit_item'         => __( 'Edit [NAME] Category' ),
		'update_item'       => __( 'Update [NAME] Category' ),
		'add_new_item'      => __( 'Add New [NAME] Category' ),
		'new_item_name'     => __( 'New [NAME] Category Name' ),
		'menu_name'         => __( '[NAME] Category' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	);

	// register_taxonomy('[NAME]-category', array('[NAME]'), $args);
}
