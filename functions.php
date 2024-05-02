<?php
// Basic theme setup
function ibwp_after_setup_theme(){
	load_theme_textdomain( "ibwp");
	add_theme_support( "post-thumbnails" );
	add_theme_support("title-tag");
}
add_action("after_setup_theme","ibwp_after_setup_theme");

// asset including
function ibwp_assets_including(){
	// css
    wp_enqueue_style( "ibwp_main_css", get_stylesheet_uri(),null,'1.0');
	// js
	wp_enqueue_script('ibwp_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array('jquery'), '1.0', false);
}
add_action("wp_enqueue_scripts","ibwp_assets_including");
?>