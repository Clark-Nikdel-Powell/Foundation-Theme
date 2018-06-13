<?php

/**
 * Add_favicon
 *
 * Adds a dev or live favicon based on the environment.
 */
function add_favicon() {
	$ico_url = 'favicon.ico';

	if ( is_admin() ) {
		$ico_url = 'admin-' . $ico_url;
	}

	$ico_url = get_stylesheet_directory_uri() . '/assets/img/icons/' . $ico_url;

	echo esc_html( '<link rel="shortcut icon" href="' . $ico_url . '">' );
}

add_action( 'wp_head', 'CNP\add_favicon' );
add_action( 'login_head', 'CNP\add_favicon' );
add_action( 'admin_head', 'CNP\add_favicon' );
