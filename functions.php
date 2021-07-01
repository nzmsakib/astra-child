<?php
 
/* enqueue script for parent theme stylesheet */   
function ramfit_parent_styles() {
     
    // enqueue style
    wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ramfit_parent_styles');
 
/* enqueue script for self stylesheet */   
function ramfit_self_styles() {
     
    // enqueue style
    wp_enqueue_style( 'navbar-css', get_stylesheet_directory_uri().'/assets/css/navbar.css' );
}
add_action( 'wp_enqueue_scripts', 'ramfit_self_styles');
 
/* enqueue script for self scripts */   
function ramfit_self_scripts() {
     
    // enqueue style
    wp_enqueue_script('jquery-js', get_stylesheet_directory_uri().'/assets/js/jquery-3.6.0.min.js', array(), null, true );
    wp_enqueue_script( 'navbar-js', get_stylesheet_directory_uri().'/assets/js/navbar.js', array(), null, true);
}
add_action( 'wp_enqueue_scripts', 'ramfit_self_scripts');