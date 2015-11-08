<?php


add_theme_support( 'post-thumbnails' ); 


function animate_css() { 
	wp_register_style( 'animate-css', 
	get_template_directory_uri() . '/css/animate.css', array(), '20120725', 'screen' );
	wp_enqueue_style( 'animate-css' ); 
} 
add_action('wp_enqueue_scripts', 'animate_css');






?>