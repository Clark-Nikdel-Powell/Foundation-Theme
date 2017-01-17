<?php
/**
 * Filters and actions for the front-page
 *
 * @package CLIENT_NAMESPACE
 */

namespace CLIENT_NAMESPACE;

/**
 * Class FrontPage
 *
 * @package CLIENT_NAMESPACE
 */
class FrontPage {

	/**
	 * Initialize the class.
	 */
	public static function init() {

		add_action( 'wp', function () {

			if ( is_front_page() ) {
				self::hook_wordpress();
			}
		} );
	}

	/**
	 * WordPress hook.
	 */
	public static function hook_wordpress() {

	}
}

FrontPage::init();
