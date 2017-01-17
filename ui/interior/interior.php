<?php
/**
 * Filters and actions for miscellaneous interior layouts.
 *
 * @package WordPress
 */

namespace CLIENT_NAMESPACE;

/**
 * Class Interior
 *
 * @package CLIENT_NAMESPACE
 */
class Interior {

	/**
	 * Initialize class.
	 */
	public static function init() {

		add_action( 'wp', function () {

			if ( ! is_front_page() ) {
				self::hook_wordpress();
			}
		} );
	}

	/**
	 * WordPress hook.
	 */
	public static function hook_wordpress() {
		add_filter( 'body_class', [ __CLASS__, 'body_class' ], 20, 1 );
		add_action( 'cnp_before_wrapper_div', [ __CLASS__, 'get_header_section' ], 20 );
		add_filter( 'cnp_content_div_classes', [ __CLASS__, 'content_class' ], 20, 1 );
		add_action( 'cnp_after_loop', [ __CLASS__, 'pagination' ], 20 );
		add_filter( 'cnp_after_content_div', [ __CLASS__, 'get_sidebar' ], 20, 1 );
	}

	/**
	 * Add interior class to body.
	 *
	 * @param array $classes Body classes.
	 *
	 * @return array
	 */
	public static function body_class( $classes ) {

		$classes[] = 'interior';

		return $classes;
	}

	/**
	 * Get section header
	 */
	public static function get_header_section() {
		get_template_part( 'partials/header-section' );
	}

	/**
	 * Add interior and column class to content
	 *
	 * @param array $classes Content classes.
	 *
	 * @return array
	 */
	public static function content_class( $classes ) {

		$classes[] = 'column';
		$classes[] = 'interior__content';

		return $classes;

	}

	/**
	 * Display pagination
	 */
	public static function pagination() {
		the_posts_pagination( [ 'prev_text' => 'Previous' ] );
	}

	/**
	 * Get sidebar
	 */
	public static function get_sidebar() {
		get_sidebar();
	}
}

Interior::init();
