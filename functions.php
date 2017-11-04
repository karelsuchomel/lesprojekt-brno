<?php
// import stylesheet
function lesprojekt_brno_scripts () 
{
	wp_register_style('main.css', get_template_directory_uri() . '/assets/css/main.css', false, NULL, 'all' );
	wp_enqueue_style('main.css');

	wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), NULL, true );
	wp_enqueue_script( 'main-js' );

	// Creates JavaScirpt obejct to localize template URL
	$wnm_custom = array( 'stylesheet_directory_uri' => get_stylesheet_directory_uri() );
	wp_localize_script( 'main-js', 'directory_uri', $wnm_custom );
}
add_action('wp_enqueue_scripts', 'lesprojekt_brno_scripts');

// theme setup
function lesprojekt_brno_theme_setup ()
{
	// navigation menus
	register_nav_menus(array(
		'menu-top-bar' => 'Top bar menu',
		'footer-navigation' => 'Footer navigation',
	));

	// add featured image support
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 360, 270, true );

	// selective refresh
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action('after_setup_theme', 'lesprojekt_brno_theme_setup');

// custom settings
require_once('inc/custom-settings.php');