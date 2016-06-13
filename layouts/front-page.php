<?php
namespace CLIENT_NAMESPACE;

/**
 * Class FrontPage
 * @package CLIENT_NAMESPACE
 *
 * Filters and actions for the front-page
 */
class FrontPage {

	public function __construct() {

		add_action( 'wp', function () {

			if ( is_front_page() ) {
				$this->hook_wordpress();
			}
		} );
	}

	public function hook_wordpress() {
		
	}
	
}

new FrontPage();