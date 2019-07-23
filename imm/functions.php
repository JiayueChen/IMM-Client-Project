<?php
//Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}
//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );

// enable a "widgetized sidebar".
if ( function_exists('register_sidebar') ) register_sidebar();

// enable featured images in pages and posts.
add_theme_support('post-thumbnails');


//enable styles in wordpress
function themebs_enqueue_styles() {
    
    // enqueue bootstrap css
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');
    
    // enqueue google font
    wp_register_style('google_font', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    wp_enqueue_style('google_font');
    
    // enqueue own stylesheet
    wp_register_style('styles', get_template_directory_uri().'/css/styles.css','__FILE__');
    wp_enqueue_style('styles');
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');

// enable javascript in wordpress
function themebs_enqueue_scripts() {
    
    
    // enqueue jquery
    wp_register_script('jquery','https://code.jquery.com/jquery-3.3.1.min.js',null, '3.3.1', true);
    wp_enqueue_script('jquery');
    
     // enquue own js
    wp_register_script('script', get_template_directory_uri().'/js/script.js', __FILE__, array('jquery','bootstrap'), null, true);
    wp_enqueue_script('script');

    
   // enqueue bootstrap dependency popper
   wp_register_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',array('jquery'), '1.14.7', true);
   wp_enqueue_script('popper');
   
   // enqueue bootstrap js
   wp_register_script('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',array('jquery'), '4.3.1', true);
   wp_enqueue_script('bootstrap');
    
 
    
   
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');
