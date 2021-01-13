<?php




function misflow_add_theme_support(): void {
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support( 'menus' );
}

add_action('after_setup_theme', 'misflow_add_theme_support');




function misflow_menus_location(): void {
	$locations = array(
		'primary'   => 'Primary Navigation',
		'footer'    => 'Footer Navigation'
	);

	register_nav_menus($locations);
}

add_action('init', 'misflow_menus_location');