<?php
namespace CLIENT_NAMESPACE;

/**
 * Class LayoutDefault
 * @package CLIENT_NAMESPACE
 *
 * Filters and actions for the default layout
 */
class LayoutDefault {

	public function __construct() {

		add_action( 'wp', function () {
			$this->hook_wordpress();
		} );
	}

	public function hook_wordpress() {
		add_filter( 'body_class', [ $this, 'body_class' ], 20, 1 );
	}

	public function body_class( $classes ) {

		global $post;
		
		if ( is_singular() ) {
			$classes[] = $post->post_name;
		}

		return $classes;
	}
}

new LayoutDefault();
