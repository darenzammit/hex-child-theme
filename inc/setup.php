<?php

/**
 * Namespacing
 *
 * If keeping the same namespace use;
 * namespace Hex;
 *
 * else to access Hex methods use
 * use Hex;
 *
 */

//namespace Hex_Child;
//use Hex;

/**
 * Disable Hex default CSS and JS
 */

add_filter('hex_load_css', '__return_false' );
add_filter('hex_load_js', '__return_false' );

/**
 * Google Fonts
 */

add_filter('hex_google_font_families', function ($fonts) {
	$fonts = [
		'open-sans' => 'Open+Sans:300,300i,400,400i',
		'roboto'    => 'Roboto:100,100i,300,300i,400,400i',
	];
	return $fonts;
});

/**
 * To remove ot override actions use after_setup_theme
 */

add_action('after_setup_theme', function() {
	remove_action('hex_before_header', Hex . '\\outdated_browser_alert', 1);
});

/**
 * Sidebars
 */

add_filter('hex_sidebars', function($sidebars){
	
	//replace all sidebars
	$sidebars = [
		'sidebar-primary' => __('Primary', 'hex'),
		'sidebar-header'  => __('Header', 'hex'),
		'sidebar-footer'  => __('Footer', 'hex'),
	];

	//remove a menu
	unset($sidebars['sidebar-footer']);

	//add a menu
	$sidebars['sidebar-mycpt'] = __('My Custom Post Type', 'hex');

	//rename a menu
	$sidebars['primary'] = __('Blog', 'hex');

	return $sidebars;
	
});

/**
 * Menus
 */

add_filter('hex_nav_menus', function($menus){
	
	//replace all menus
	$menus = [
		'primary' => __('Primary', 'hex'),
		'mobile'  => __('Mobile', 'hex'),
		'social'  => __('Social Links', 'hex'),
		'footer'  => __('Footer', 'hex'),
	];

	//remove a menu
	unset($menus['mobile']);

	//add a menu
	$menus['top'] = __('Top', 'hex');

	//rename a menu
	$menus['primary'] = __('Main Menu', 'hex');

	return $menus;

});