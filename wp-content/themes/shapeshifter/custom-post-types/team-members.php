<?php

function create_custom_post_type_team_members() {

	$labels = array(
		'name'                  => __( 'Team Members' ),
        'singular_name'         => __( 'Team Member' ),
        'add_new'               => __( 'Add New' ),
        'add_new_item'          => __( 'Add New Team Member' ),
		'edit_item'             => __( 'Edit Team Member' ),
		'new_item'              => __( 'New Team Member' ),
		'view_item'             => __( 'View Team Member' ),
        'view_items'            => __( 'View Team Members' ),
        'search_items'          => __( 'Search Team Member' ),
		'not_found'             => __( 'Not Found' ),
        'not_found_in_trash'    => __( 'Not Found in Trash' ),
        'parent_item_colon'     => __( 'Parent Team Member:' ),
        'all_items'             => __( 'All Team Members' ),
        'archives'              => __( 'Team Member Archives' ),
        'insert_into_item'      => __( 'Insert into Team Member' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Team Member' ),
        'items_list_navigation' => __( 'Team Members List Navigation' ),
        'items_list'            => __( 'Team Members List' ),
        'item_published'        => __( 'Item Published' ),
		'filter_items_list'     => __( 'Filter Team Members list' ),
	);
	$args   = array(
		'label'         => __( 'Team Member' ),
		'labels'        => $labels,
		'description'   => __( 'Team Member postings' ),
		'public'        => true,
        'menu_icon'     => 'dashicons-id',
        'menu_position' => 30,
		'has_archive'   => true,
		'taxonomies'    => array( 'departments' ),
		'supports'      => array( 'title', 'editor' ),
	);
	register_post_type( 'team-member-post', $args );

}

function create_taxonomy_team_departments() {

    $labels = array(
        'name'                       => _x( 'Departments', 'Taxonomy General Name' ),
        'singular_name'              => _x( 'Department', 'Taxonomy Singular Name' ),
        'search_items'               => __( 'Search Departments' ),
        'popular_items'              => __( 'Popular Departments' ),
        'all_items'                  => __( 'All Departments' ),
        'parent_item'                => __( 'Parent Departments' ),
        'parent_item_colon'          => __( 'Parent Departments:' ),
        'edit_item'                  => __( 'Edit Departments' ),
        'view_item'                  => __( 'View Departments' ),
        'update_item'                => __( 'Update Departments' ),
        'add_new_item'               => __( 'Add New Departments' ),
        'new_item_name'              => __( 'New Departments Name' ),
        'separate_items_with_commas' => __( 'Separate deparments with commas' ),
        'add_or_remove_items'        => __( 'Add or remove departments' ),
        'choose_from_most_used'      => __( 'Choose from the most used' ),
        'not_found'                  => __( 'No departments found' ),
        'no_terms'                   => __( 'No departments' ),
        'items_list_navigation'      => __( 'Departments list navigation' ),
        'items_list'                 => __( 'Departments list' ),
    );
    $args   = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_admin_column' => true,
    );
    register_taxonomy( 'departments', array( 'team-member-post' ), $args );
}

add_action( 'init', 'create_custom_post_type_team_members', 0 );
add_action( 'init', 'create_taxonomy_team_departments', 0 );
