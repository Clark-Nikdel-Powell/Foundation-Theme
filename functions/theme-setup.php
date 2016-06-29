<?php
/**
 * Intended for WordPress, theme-specific setup.
 * Documentation: https://github.com/Clark-Nikdel-Powell/Foundation-Theme/wiki/Files
 */

/**
 * Add theme/post type support
 */
add_action( 'init', function () {

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_post_type_support( 'page', 'excerpt' );

} );

/**
 * Add nav menu locations
 */
add_action( 'after_setup_theme', function () {

	register_nav_menus( array(
		'primary'   => 'Primary Menu',
		'footer'    => 'Footer Menu',
		'copyright' => 'Copyright Menu',
		'social'    => 'Social Menu'
	) );

} );

/**
 * add_favicon
 *
 * Adds a dev or live favicon based on the environment.
 */
function add_favicon() {
	$ico_url = 'favicon.ico';

	if ( is_admin() ) {
		$ico_url = 'admin-' . $ico_url;
	}
	if ( strpos( $_SERVER['SERVER_NAME'], '.dev' ) !== false || strpos( $_SERVER['SERVER_NAME'], '.staging' ) !== false ) {
		$ico_url = 'dev-' . $ico_url;
	}

	$ico_url = get_stylesheet_directory_uri() . '/assets/img/icons/' . $ico_url;

	echo '<link rel="shortcut icon" href="' . $ico_url . '">';
}

add_action( 'wp_head', 'add_favicon' );
add_action( 'login_head', 'add_favicon' );
add_action( 'admin_head', 'add_favicon' );