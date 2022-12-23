<?php 

// Register Custom Post Type job
function create_job_cpt() {

	$labels = array(
		'name' => _x( 'jobs', 'Post Type General Name', 'job-post-page' ),
		'singular_name' => _x( 'job', 'Post Type Singular Name', 'job-post-page' ),
		'menu_name' => _x( 'jobs', 'Admin Menu text', 'job-post-page' ),
		'name_admin_bar' => _x( 'job', 'Add New on Toolbar', 'job-post-page' ),
		'archives' => __( 'job Archives', 'job-post-page' ),
		'attributes' => __( 'job Attributes', 'job-post-page' ),
		'parent_item_colon' => __( 'Parent job:', 'job-post-page' ),
		'all_items' => __( 'All jobs', 'job-post-page' ),
		'add_new_item' => __( 'Add New job', 'job-post-page' ),
		'add_new' => __( 'Add New', 'job-post-page' ),
		'new_item' => __( 'New job', 'job-post-page' ),
		'edit_item' => __( 'Edit job', 'job-post-page' ),
		'update_item' => __( 'Update job', 'job-post-page' ),
		'view_item' => __( 'View job', 'job-post-page' ),
		'view_items' => __( 'View jobs', 'job-post-page' ),
		'search_items' => __( 'Search job', 'job-post-page' ),
		'not_found' => __( 'Not found', 'job-post-page' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'job-post-page' ),
		'featured_image' => __( 'Featured Image', 'job-post-page' ),
		'set_featured_image' => __( 'Set featured image', 'job-post-page' ),
		'remove_featured_image' => __( 'Remove featured image', 'job-post-page' ),
		'use_featured_image' => __( 'Use as featured image', 'job-post-page' ),
		'insert_into_item' => __( 'Insert into job', 'job-post-page' ),
		'uploaded_to_this_item' => __( 'Uploaded to this job', 'job-post-page' ),
		'items_list' => __( 'jobs list', 'job-post-page' ),
		'items_list_navigation' => __( 'jobs list navigation', 'job-post-page' ),
		'filter_items_list' => __( 'Filter jobs list', 'job-post-page' ),
	);
	$args = array(
		'label' => __( 'job', 'job-post-page' ),
		'description' => __( 'job post', 'job-post-page' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'revisions', 'author', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'job', $args );

}
add_action( 'init', 'create_job_cpt', 0 );