<?php

function create_custom_post_type_blogs() {

	$labels = array(
		'name'                  => __( 'Blog' ),
        'singular_name'         => __( 'Blog Post' ),
        'add_new'               => __( 'Add New' ),
        'add_new_item'          => __( 'Add New Blog Post' ),
		'edit_item'             => __( 'Edit Blog Post' ),
		'new_item'              => __( 'New Blog Post' ),
		'view_item'             => __( 'View Blog Post' ),
        'view_items'            => __( 'View Blog Posts' ),
        'search_items'          => __( 'Search Blog Post' ),
		'not_found'             => __( 'Not Found' ),
        'not_found_in_trash'    => __( 'Not Found in Trash' ),
        'parent_item_colon'     => __( 'Parent Blog Post:' ),
        'all_items'             => __( 'All Blog Posts' ),
        'archives'              => __( 'Blog Post Archives' ),
        'insert_into_item'      => __( 'Insert into Blog Post' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Blog Post' ),
        'items_list_navigation' => __( 'Blog Posts List Navigation' ),
        'items_list'            => __( 'Blog Posts List' ),
        'item_published'        => __( 'Item Published' ),
		'filter_items_list'     => __( 'Filter Blog Posts list' ),
	);
	$args   = array(
		'label'         => __( 'Blog Post' ),
		'labels'        => $labels,
		'description'   => __( 'Blog postings' ),
		'public'        => true,
        'menu_icon'     => 'dashicons-welcome-write-blog',
        'menu_position' => 21,
		'has_archive'   => false, // turn of archive page 
		'supports'      => array( 'title', 'editor', 'page-attributes' ),
		'rewrite'     	=> array('slug' => '/blog'),
		'hierarchical' 	=> true,
	);
	register_post_type( 'blog-post', $args );

}

add_action( 'init', 'create_custom_post_type_blogs', 0 );
