<?php
add_theme_support( 'wp-block-styles' );
add_theme_support('post-thumbnails');
add_image_size('dewebkiller', 830, 340, true);
add_image_size('dwk-banner', 1380, 690, true);
add_image_size('dwk-gallery', 370, 250, true);

//require_once('wp_bootstrap_navwalker.php');
/* ---- Register Menus ---- */

function register_glasseye_menus() {
    register_nav_menus(
            array(
                'primary' => __('Main Menu'),
                'footer' => __('Footer Menu'),
                'quick' => __('Quick Link')
            )
    );
}

add_action('init', 'register_glasseye_menus');

function add_link_atts($atts) {
  $atts['class'] = "nav-link";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

//Include external files
require_once(TEMPLATEPATH . '/inc/custom-post.php');
require_once(TEMPLATEPATH . '/inc/gallery_type.php'); 
require_once(TEMPLATEPATH . '/inc/enqueues.php');
require_once(TEMPLATEPATH . '/inc/property-function.php');

function remove_menus(){
  

  //remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments
  //remove_menu_page( 'plugins.php' );                //Plugins
  remove_menu_page( 'tools.php' );                  //Tools

  
}
add_action( 'admin_menu', 'remove_menus' );

// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/acf/';
    
    // return
    return $path;
    
}
 

// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/acf/';
    
    // return
    return $dir;
    
}
 

// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
include_once( get_stylesheet_directory() . '/acf/acf.php' );

register_sidebar(array(
	'name' => 'Newsletter',
	'id'   => 'newsletter',
	'description'   => 'This is Newsletter Section.',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>'
));