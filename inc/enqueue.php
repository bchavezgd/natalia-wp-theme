<?php
/**
 * natalia enqueue scripts
 *
 * @package natalia
 */

function natalia_scripts() {
    wp_enqueue_style( 'natalia-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), '0.4.7');
    wp_enqueue_script('jquery'); 
    wp_enqueue_script( 'natalia-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), '0.4.7', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'natalia_scripts' );

/** 
*Loading slider script conditionally
**/

if ( is_active_sidebar( 'hero' ) ):
add_action("wp_enqueue_scripts","natalia_slider");
  
function natalia_slider(){
    if ( is_front_page() ) {    
    $data = array(
        "timeout"=> intval( get_theme_mod( 'natalia_theme_slider_time_setting', 5000 )),
        "items"=> intval( get_theme_mod( 'natalia_theme_slider_count_setting', 1 ))
    	);

    wp_enqueue_script("natalia-slider-script", get_stylesheet_directory_uri() . '/js/slider_settings.js', array(), '0.4.7');
    wp_localize_script( "natalia-slider-script", "natalia_slider_variables", $data );
    }
}
endif;

