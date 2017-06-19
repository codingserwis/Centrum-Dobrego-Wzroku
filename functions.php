<?php 
/** 
 *	Centrum Dobrego Wzroku theme - functions
 */
/**
 * Enquequing style and scripts to the theme
 */
function add_theme_css() {
	wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.css', array(), '1.0', 'all' );
}
add_action('wp_enqueue_scripts', 'add_theme_css' );
/** 
 *	Filter to load Carousel for logo in home page
 */
function carousel_slider_load_scripts( $load_scripts ) {
    // To use only for front page
    if ( is_front_page() ) {
        return true;
    }
    return $load_scripts;
}
add_filter('carousel_slider_load_scripts', 'carousel_slider_load_scripts');
/**
 *	Register menus in the theme 
 */
function myCustomMenu(){
	$locations = array(
						'header_menu' => 'Menu główne',
						'footer_menu' => 'Menu w stopce',
					);
	register_nav_menus( $locations );
}
add_action('init', 'myCustomMenu');

/**
 * Function that allows to load SVG files to the media
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 * Post thumbnails
 */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}

/**
 *	Register Side Bars
 */
function mySidebar(){
	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$args = array(
			'name'          => __( 'Mój Sidebar', 'theme_text_domain' ),
			'id'            => 'my_sidebar',
			'description'   => 'Widżety',
			'class'         => 'test',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>'
		);
		register_sidebar( $args );
}
add_action('widgets_init', 'mySidebar' );

/**
 *	Custom excerpts
 */ 
function customExcerpts($more){
	global $post;
	return '... <a class="" href="' . get_permalink($post -> ID) . '">czytaj dalej</a>';
}
add_filter('excerpt_more', 'customExcerpts' );