<?php
namespace CLIENT_NAMESPACE;

/**
 * Class LayoutDefault
 * @package CLIENT_NAMESPACE
 *
 * Filters and actions for the default layout
 */
class LayoutDefault {

	public static function init() {

		add_action( 'wp_head', function () {
			self::hook_wordpress();
		} );
	}

	public static function hook_wordpress() {
		add_filter( 'body_class', [ __CLASS__, 'body_class' ], 20, 1 );
	}

	public static function body_class( $classes ) {

		global $post;
		if ( is_singular() ) {
			$classes[] = $post->post_name;
		}

		return $classes;
	}
}

LayoutDefault::init();
