<?php

/*
===========================
Enqueue External Files
===========================
*/

function pat0_script_enqueue(){
	wp_enqueue_style('Slick', get_template_directory_uri() . '/slick/slick.css', array(), '1.0.0');
	wp_enqueue_style('Icons', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.0.0');
	wp_enqueue_style('PrimaryStyleSheet', get_template_directory_uri() . '/css/main.css', array(), '1.0.0');
	wp_enqueue_script('jq', get_template_directory_uri() . '/js/jquery-1.11.3.min.js', array(), '1.0.0', true);
	wp_enqueue_script('Slick', get_template_directory_uri() . '/slick/slick.min.js', array('jq'), '1.0.0', true);
	wp_enqueue_script('Scroll', get_template_directory_uri() . '/js/jquery.smoothwheel.js', array('jq'), '1.0.0', true);
}
 add_action('wp_enqueue_scripts', 'pat0_script_enqueue');

 function pat0_Setup(){
 add_theme_support('menus');
 
 register_nav_menu('MainNav', 'primary header navigation');
}

add_action('after_setup_theme', 'pat0_Setup');

add_theme_support('post-thumbnails');

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'homepage-background', 1920 );
    add_image_size( 'postbox',  640, 640, true);
}

 ?>