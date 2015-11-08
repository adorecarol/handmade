<?php


add_theme_support( 'post-thumbnails' ); 


function animate_css() { 
	wp_register_style( 'animate-css', 
	get_template_directory_uri() . '/css/animate.css', array(), '20120725', 'screen' );
	wp_enqueue_style( 'animate-css' ); 
} 
add_action('wp_enqueue_scripts', 'animate_css');


function is_active($page){
	// get the current url
	$url = $_SERVER['REQUEST_URI'];

	$url = str_replace('handmade', '', $url);

	$url = str_replace('/', '', $url);

	if($page == $url){

		echo 'active';

	}

}


?>
