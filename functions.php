<?php

// cache busting solve in Version
if(site_url()=="http://localhost/ithemeone"){
  define("VERSION",time());
}else{
  define("VERSION",wp_get_theme()->get("Version"));
  
}

// Basic theme setup
function ibwp_after_setup_theme(){
	load_theme_textdomain("ibwp");
	add_theme_support( "post-thumbnails" );
	add_theme_support("title-tag");
    // register menu location
    register_nav_menu( "topmenu", __("Top Menu","ibwp"));
}
add_action("after_setup_theme","ibwp_after_setup_theme");


// asset including
function ibwp_assets_including(){
	// css
    wp_enqueue_style( "ibwp_main_css", get_stylesheet_uri(),null,VERSION);
    // externall css add
    wp_enqueue_style( "ibwp_feather_light_css","//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css");
	// js
	wp_enqueue_script('ibwp_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array('jquery'), VERSION, false);
    // external js add
    wp_enqueue_script('ibwp_feather_light_jss', "//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js", array('jquery'), VERSION, true);
    // internal js add
    wp_enqueue_script("ibwp_main_js",get_theme_file_uri( "/assets/js/main.js" ), array('jquery','ibwp_feather_light_jss'), VERSION,true);
}
add_action("wp_enqueue_scripts","ibwp_assets_including");

// registering sidebar
function ibwp_register_sidebars(){
	register_sidebar(
        array(
            'name'          => __( 'Single Post Sidebar', 'ibwp' ),
            'id'            => 'single_post_right_sidebar',
            'description'   => __( 'Right Sidebar', 'ibwp' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'footer left', 'ibwp' ),
            'id'            => 'footer-left',
            'description'   => __( 'Right Sidebar', 'ibwp' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action("widgets_init","ibwp_register_sidebars");

function ibwp_nav_class( $classes, $item ) {
    $classes[] = "list-decoration";

    return $classes;
}
add_filter( "nav_menu_css_class", "ibwp_nav_class", 10, 2 );

?>


