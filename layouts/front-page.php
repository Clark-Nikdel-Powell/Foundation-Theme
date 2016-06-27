<?php
namespace CLIENT_NAMESPACE;

/**
 * Class FrontPage
 * @package CLIENT_NAMESPACE
 *
 * Filters and actions for the front-page
 */
class FrontPage {

	public static function init() {

		add_action( 'wp', function () {

			if ( is_front_page() ) {
				self::hook_wordpress();
			}
		} );
	}

	public static function hook_wordpress() {

	}

}

FrontPage::init();
