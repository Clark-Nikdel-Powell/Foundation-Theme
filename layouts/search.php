<?php
namespace CLIENT_NAMESPACE;

/**
 * Class Search
 * @package CLIENT_NAMESPACE
 *
 * Filters and actions for search results.
 */
class Search {

	public function __construct() {

		add_action( 'wp_head', function () {

			if ( is_search() ) {
				$this->hook_wordpress();
			}
		} );
	}

	public function hook_wordpress() {
		add_action( 'cnp_before_loop', [ $this, 'search_results_header' ] );
	}

	public function search_results_header() {
		get_template_part('partials/header-search');
	}
}

new Search();