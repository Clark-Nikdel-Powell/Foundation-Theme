<?php
/**
 * Filters and actions for the default layout
 *
 * @package CLIENT_NAMESPACE
 */

namespace CLIENT_NAMESPACE;

/**
 * Class LayoutDefault
 *
 * @package CLIENT_NAMESPACE
 */
class LayoutDefault {

	/**
	 * Initialize the class.
	 */
	public static function init() {

		add_action( 'wp_head', function () {
			self::hook_wordpress();
		} );
	}

	/**
	 * WordPress hook.
	 */
	public static function hook_wordpress() {
		add_filter( 'body_class', [ __CLASS__, 'body_class' ], 20, 1 );
		add_filter( 'wp_list_pages', [ __CLASS__, 'adjust_wp_list_pages_children_class' ], 20, 3 );
	}

	/**
	 * Add a body class.
	 *
	 * @param array $classes Body classes array.
	 *
	 * @return array
	 */
	public static function body_class( $classes ) {

		global $post;
		if ( is_singular() ) {
			$classes[] = $post->post_name;
		}

		$classes[] = 'layout-default';

		return $classes;
	}

	/**
	 * Adjusts the subnav markup.
	 *
	 * @param string $output The list HTML.
	 * @param array $args The list args.
	 * @param array $pages The array of pages.
	 *
	 * @return mixed
	 */
	public static function adjust_wp_list_pages_children_class( $output, $args, $pages ) {

		$children_present = strpos( $output, "<ul class='children'>" );

		if ( false !== $children_present ) {
			$output = str_replace( "<ul class='children'>", "<ul class='subnav__children'>", $output );
		}

		return $output;

	}
}

LayoutDefault::init();
