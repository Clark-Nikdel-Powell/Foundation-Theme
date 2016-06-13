<?php
namespace CLIENT_NAMESPACE;

/**
 * Class Interior
 * @package CLIENT_NAMESPACE
 *
 * Filters and actions for miscellaneous interior layouts.
 */
class Interior {

	public function __construct() {

		add_action( 'wp', function () {

			if ( is_front_page() ) {
				$this->hook_wordpress();
			}
		} );
	}

	public function hook_wordpress() {
		add_filter( 'body_class', [ $this, 'body_class' ], 20, 1 );
		add_action( 'cnp_after_header', [ $this, 'get_header_int' ], 20 );
		add_filter( 'cnp_content_class', [ $this, 'content_class' ], 20, 1 );
		add_action( 'cnp_after_loop', [ $this, 'pagination' ], 20 );
		add_filter( 'cnp_after_content_div', [ $this, 'get_sidebar' ], 20, 1 );
	}

	public function body_class( $classes ) {

		$classes[] = 'interior';

		return $classes;
	}

	public function get_header_int() {
		get_template_part( 'partials/header-int' );
	}

	public function content_class( $classes ) {

		$classes[] = 'column';
		$classes[] = 'interior__content';

		return $classes;

	}

	public function pagination() {
		the_posts_pagination( [ 'prev_text' => 'Previous' ] );
	}

	public function get_sidebar() {
		get_sidebar();
	}
}

new Interior();
