<?php
namespace CLIENT_NAMESPACE;

/**
 * Class Interior
 * @package CLIENT_NAMESPACE
 *
 * Filters and actions for miscellaneous interior layouts.
 */
class Interior {

	public static function init() {

		add_action( 'wp', function () {

			if ( ! is_front_page() ) {
				self::hook_wordpress();
			}
		} );
	}

	public static function hook_wordpress() {
		add_filter( 'body_class', [ __CLASS__, 'body_class' ], 20, 1 );
		add_action( 'cnp_after_header', [ __CLASS__, 'get_header_int' ], 20 );
		add_filter( 'cnp_content_class', [ __CLASS__, 'content_class' ], 20, 1 );
		add_action( 'cnp_after_loop', [ __CLASS__, 'pagination' ], 20 );
		add_filter( 'cnp_after_content_div', [ __CLASS__, 'get_sidebar' ], 20, 1 );
	}

	public static function body_class( $classes ) {

		$classes[] = 'interior';

		return $classes;
	}

	public static function get_header_int() {
		get_template_part( 'partials/header-int' );
	}

	public static function content_class( $classes ) {

		$classes[] = 'column';
		$classes[] = 'interior__content';

		return $classes;

	}

	public static function pagination() {
		the_posts_pagination( [ 'prev_text' => 'Previous' ] );
	}

	public static function get_sidebar() {
		get_sidebar();
	}
}

Interior::init();
