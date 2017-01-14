<?php
	
// Add stylesheets and scripts 
function add_scriptsandstyles(){
	// styles
	wp_enqueue_style('default-style', get_stylesheet_uri());
	wp_enqueue_style('main-style', get_template_directory_uri() . '/style/main.css');
	
	// styles
	wp_enqueue_script('jquery');
	wp_enqueue_script('main-script', get_template_directory_uri() . '/scripts/main.js');
}	

add_action('wp_enqueue_scripts' , 'add_scriptsandstyles');


// WP menues
register_nav_menus(array(
	'primary' 	=> __('Primary Menu'),
	'footer' 	=> __('Footer Menu'),
))
	
?>