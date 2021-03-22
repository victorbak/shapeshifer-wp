<?php

function create_custom_post_type_jobs() {

	$labels = array(
		'name'                  => __( 'Jobs' ),
        'singular_name'         => __( 'Job' ),
        'add_new'               => __( 'Add New' ),
        'add_new_item'          => __( 'Add New Job' ),
		'edit_item'             => __( 'Edit Job' ),
		'new_item'              => __( 'New Job' ),
		'view_item'             => __( 'View Job' ),
        'view_items'            => __( 'View Jobs' ),
        'search_items'          => __( 'Search Job' ),
		'not_found'             => __( 'Not found' ),
        'not_found_in_trash'    => __( 'Not found in Trash' ),
        'parent_item_colon'     => __( 'Parent Job:' ),
        'all_items'             => __( 'All Jobs' ),
        'archives'              => __( 'Job Archives' ),
        'insert_into_item'      => __( 'Insert into Job' ),    
        'uploaded_to_this_item' => __( 'Uploaded to this Job' ),
        'items_list_navigation' => __( 'Jobs list navigation' ),
        'items_list'            => __( 'Jobs list' ),
        'item_published'        => __( 'Date Posted' ),
		'filter_items_list'     => __( 'Filter Jobs list' ),
	);
	$args   = array(
		'label'         => __( 'Job' ),
		'labels'        => $labels,
		'description'   => __( 'Job postings' ),
		'public'        => true,
		'menu_icon'     => 'dashicons-businessman',
		'has_archive'   => true,
		'taxonomies'    => array( 'job_categories' ),
		'supports'      => array( 'title', 'editor' ),
	);
	register_post_type( 'jobs-post', $args );

}

function create_taxonomy_job_categories() {

    $labels = array(
        'name'                       => _x( 'Job Categories', 'Taxonomy General Name' ),
        'singular_name'              => _x( 'Job Category', 'Taxonomy Singular Name' ),
        'search_items'               => __( 'Search Categories' ),
        'popular_items'              => __( 'Popular Categories' ),
        'all_items'                  => __( 'All Categories' ),
        'parent_item'                => __( 'Parent Categories' ),
        'parent_item_colon'          => __( 'Parent Categories:' ),
        'edit_item'                  => __( 'Edit Categories' ),
        'view_item'                  => __( 'View Categories' ),
        'update_item'                => __( 'Update Categories' ),
        'add_new_item'               => __( 'Add New Categories' ),
        'new_item_name'              => __( 'New Categories Name' ),
        'separate_items_with_commas' => __( 'Separate categores with commas' ),
        'add_or_remove_items'        => __( 'Add or remove categories' ),
        'choose_from_most_used'      => __( 'Choose from the most used' ),
        'not_found'                  => __( 'No categories found' ),
        'no_terms'                   => __( 'No categories' ),
        'items_list_navigation'      => __( 'Categories list navigation' ),
        'items_list'                 => __( 'Categories list' ),
    );
    $args   = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_admin_column' => true,
        'menu_position' => 40,
    );
    register_taxonomy( 'job_categories', array( 'jobs-post' ), $args );
}

add_action( 'init', 'create_custom_post_type_jobs', 0 );
add_action( 'init', 'create_taxonomy_job_categories', 0 );
