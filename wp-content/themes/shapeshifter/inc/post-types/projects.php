<?php

function create_custom_post_type_projects() {

	$labels = array(
		'name'                  => __( 'Projects' ),
        'singular_name'         => __( 'Project' ),
        'add_new'               => __( 'Add New' ),
        'add_new_item'          => __( 'Add New Project' ),
		'edit_item'             => __( 'Edit Project' ),
		'new_item'              => __( 'New Project' ),
		'view_item'             => __( 'View Project' ),
        'view_items'            => __( 'View Projects' ),
        'search_items'          => __( 'Search Project' ),
		'not_found'             => __( 'Not Found' ),
        'not_found_in_trash'    => __( 'Not Found in Trash' ),
        'parent_item_colon'     => __( 'Parent Project:' ),
        'all_items'             => __( 'All Projects' ),
        'archives'              => __( 'Project Archives' ),
        'insert_into_item'      => __( 'Insert into Project' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Project' ),
        'items_list_navigation' => __( 'Projects List Navigation' ),
        'items_list'            => __( 'Projects List' ),
        'item_published'        => __( 'Item Published' ),
		'filter_items_list'     => __( 'Filter Projects list' ),
	);
	$args   = array(
		'label'         => __( 'Project' ),
		'labels'        => $labels,
		'description'   => __( 'Project postings' ),
		'public'        => true,
        'menu_icon'     => 'dashicons-art',
        'menu_position' => 20,
		'has_archive'   => false, // turn of archive page 
		'supports'      => array( 'title', 'editor', 'page-attributes' ),
		'rewrite'     	=> array('slug' => '/projects'),
		'hierarchical' 	=> true,
	);
	register_post_type( 'project-post', $args );

}

add_action( 'init', 'create_custom_post_type_projects', 0 );
