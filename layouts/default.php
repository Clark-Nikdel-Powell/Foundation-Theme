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
		add_filter( 'wp_list_pages', [ __CLASS__, 'adjust_wp_list_pages_children_class' ], 20, 3 );
	}

	public static function body_class( $classes ) {

		global $post;
		if ( is_singular() ) {
			$classes[] = $post->post_name;
		}
		
		$classes[] = 'layout-default';

		return $classes;
	}

	public static function adjust_wp_list_pages_children_class( $output, $args, $pages ) {

		$children_present = strpos( $output, "<ul class='children'>" );

		if ( $children_present !== false ) {
			$output = str_replace( "<ul class='children'>", "<ul class='subnav__children'>", $output );
		}

		return $output;

	}
}

LayoutDefault::init();
