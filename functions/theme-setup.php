<?php

namespace CNP;
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
		'support'   => 'Support Menu',
		'footer'    => 'Footer Menu',
		'copyright' => 'Copyright Menu',
		'social'    => 'Social Menu',
	) );

} );
