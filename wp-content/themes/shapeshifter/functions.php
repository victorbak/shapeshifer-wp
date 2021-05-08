<?php
global $siteurl;
$siteurl = get_site_url();

global $themeurl;
$themeurl = get_template_directory_uri();

/* -SCRIPTS & STYLES------------------------------------------------- */
function script_styles_setup() {
	wp_deregister_script( 'jquery' );
	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
	wp_enqueue_script('jquery');

	wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0.10' );

    wp_enqueue_script('header-js', get_template_directory_uri() . '/js/header.js', array('jquery'));
    // wp_enqueue_script('splash-js', get_template_directory_uri() . '/js/splash.js', array('jquery'));
	
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts-all.js', array('jquery'), '1.0.0.1', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'script_styles_setup' );


/* -MENU SETUP------------------------------------------------- */

register_nav_menus( array( 
	'header' => 'Header menu', 
	'footer' => 'Footer menu' 
) );


/* -Fonts ----------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'tu_load_font_awesome' );
/**
 * Enqueue Font Awesome.
 */
function tu_load_font_awesome() {
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.3.1/css/all.css', array(), '5.3.1' );
}

/* -BASIC SETUP------------------------------------------------- */
function setup() {
	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 'css/editor-style.css'));

	// SUPPORT
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('post-thumbnails');
	add_theme_support('menu');
	add_theme_support( 'title-tag' );

}
add_action( 'after_setup_theme', 'setup' );
// remove_filter('the_content', 'wpautop');


//add admin styles
function admin_styles() {
	echo '<link rel="stylesheet" href="'.get_template_directory_uri() . '/css/wp-admin.css?v1.0'.'" type="text/css" media="all" />';
}
add_action('admin_head', 'admin_styles');


/* -INCLUDES------------------------------------------------- */
// require_once 'inc/autoload.php';



/* -THUMB SIZES------------------------------------------------- */
//add custom thumb sizes.
function custom_image_sizes() {
	if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'side-img', 490, 490 );
	}
}

add_action( 'after_setup_theme', 'custom_image_sizes' );



/* -THUMBNAL SCALE------------------------------------------------- */

function alx_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
	if ( !$crop ) return null; // let the wordpress default function handle this

	$aspect_ratio = $orig_w / $orig_h;
	$size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

	$crop_w = round($new_w / $size_ratio);
	$crop_h = round($new_h / $size_ratio);

	$s_x = floor( ($orig_w - $crop_w) / 2 );
	$s_y = floor( ($orig_h - $crop_h) / 2 );

	return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}
add_filter( 'image_resize_dimensions', 'alx_thumbnail_upscale', 10, 6 );



/* -Modify WP Captions to remove width and height from .wp-caption------------------------------------------------- */

add_filter('img_caption_shortcode', 'my_img_caption_shortcode_filter',10,3);
function my_img_caption_shortcode_filter($val, $attr, $content = null) {
	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> '',
		'width'	=> '',
		'caption' => ''
	), $attr));
	
	if ( 1 > (int) $width || empty($caption) )
		return $val;

	$capid = '';
	if ( $id ) {
		$id = esc_attr($id);
		$capid = 'id="attachment_'. $id . '" ';
		$id = 'id="' . $id . '"';
	}

	return '<div ' . $id . ' class="wp-caption ' . esc_attr($align) . '">' . do_shortcode( $content ) . '<p ' . $capid 
	. 'class="wp-caption-text">' . $caption . '</p></div>';
}



/* -OUTPUT VARIABLE------------------------------------------------- */
function output($content){
	echo '<pre>';
	var_dump($content);
	echo '</pre>';
}



/* -REGISTER NAV WALKER------------------------------------------------- */
// require_once('wp_bootstrap_navwalker.php');


/* -REMOVE WP VERSION FROM CSS AND JS FILES------------------------------------------------- */
// because we will use our own
function remove_version_from_style_js( $src ) {
	if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'remove_version_from_style_js');
add_filter( 'script_loader_src', 'remove_version_from_style_js');



// /* -REMOVE MENU LINKS FROM ADMIN SIDEBAR------------------------------------------------- */
// function remove_menus(){
//   remove_menu_page( 'edit.php' ); // POSTS
//   remove_menu_page( 'edit-comments.php' ); // COMMENTS
// }
// add_action( 'admin_menu', 'remove_menus' );



/* -REMOVE MENU LINKS FROM ADMIN TOPBAR------------------------------------------------- */
add_action( 'admin_bar_menu', 'remove_wp_nodes', 999 );

function remove_wp_nodes() 
{
    global $wp_admin_bar;   
	$wp_admin_bar->remove_node( 'comments' );
	$wp_admin_bar->remove_node( 'new-post' );
}



// ------Add class to category parents with children ------//
class Walker_Category_Find_Parents extends Walker_Category {
	function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ) {
		extract($args);
	
		$cat_name = esc_attr( $category->name );
		$cat_name = apply_filters( 'list_cats', $cat_name, $category );
		$link = '<a href="' . esc_url( get_term_link($category) ) . '" ';
		if ( $use_desc_for_title == 0 || empty($category->description) )
			$link .= 'title="' . esc_attr( sprintf(__( 'View all posts filed under %s' ), $cat_name) ) . '"';
		else
			$link .= 'title="' . esc_attr( strip_tags( apply_filters( 'category_description', $category->description, $category ) ) ) . '"';
			$link .= '>';
			$link .= $cat_name . '</a>';
	
		if ( !empty($show_count) )
			$link .= ' (' . intval($category->count) . ')';
	
				if ( 'list' == $args['style'] ) {
						$output .= "\t<li";
						$class = 'cat-item cat-item-' . $category->term_id;
						$togglebutton = "";
	
						$termchildren = get_term_children( $category->term_id, $category->taxonomy );
						if(count($termchildren)>0){
							$class .=  ' has-children';
							$togglebutton = "<button type='button'></button>";
						}
	
						if ( !empty($current_category) ) {
								$_current_category = get_term( $current_category, $category->taxonomy );
								if ( $category->term_id == $current_category )
										$class .=  ' current-cat';
								elseif ( $category->term_id == $_current_category->parent )
										$class .=  ' current-cat-parent';
						}
						$output .=  ' class="' . $class . '"';
						$output .= ">$link".$togglebutton."\n";
				} else {
						$output .= "\t$link<br />\n";
				}
	}
}


/* -ALLOW SVG IN MEDIA UPLOAD------------------------------------------------- */
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  //if ( $wp_version !== '4.7.1' ) {
  //   return $data;
  //}

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


function reset_editor()
{
     global $_wp_post_type_features;

     $post_type="page";
     $feature = "editor";
     if ( !isset($_wp_post_type_features[$post_type]) )
     {

     }
     elseif ( isset($_wp_post_type_features[$post_type][$feature]) )
     unset($_wp_post_type_features[$post_type][$feature]);
}

add_action("init","reset_editor");


/* -Add layout titles to flex content------------------------------------------------- */
// function my_acf_flexible_content_layout_title( $title, $field, $layout, $i ) {
// 	// load text sub field if exists
// 	$text = get_sub_field('layout_title');
// 	if ($text) {
// 		$title = $text;
// 		return '<span class="flex-icon"></span>'.$title;
// 	}
// 	else {
// 		return '<span class="flex-icon"></span>'.$title;
// 	}
// }

// name
// add_filter('acf/fields/flexible_content/layout_title/name=content', 'my_acf_flexible_content_layout_title', 10, 4);

// function disable_wp_auto_p( $content ) {
//   if ( is_singular( 'page' ) ) {
//     remove_filter( 'the_content', 'wpautop' );
//     remove_filter( 'the_excerpt', 'wpautop' );
//   }
//   return $content;
// }
// add_filter( 'the_content', 'disable_wp_auto_p', 0 );

/* -Custom Post Types-----------------	-------------------------------- */
include get_template_directory() . '/inc/post-types/jobs.php';
include get_template_directory() . '/inc/post-types/projects.php';
include get_template_directory() . '/inc/post-types/reusable_block.php';
include get_template_directory() . '/inc/post-types/team_members.php';

?>
