<?php
/**
 * Filters and actions for search results.
 *
 * @package CLIENT_NAMESPACE
 */

namespace CLIENT_NAMESPACE;

/**
 * Class Search
 *
 * @package CLIENT_NAMESPACE
 */
class Search {

	/**
	 * Initialize class
	 */
	public static function init() {

		add_action( 'wp_head', function () {

			$s = get_query_var( 's' );

			if ( is_search() || '' !== $s ) {
				self::hook_wordpress();
			}
		} );
	}

	/**
	 * WordPress Hook
	 */
	public static function hook_wordpress() {
		add_action( 'cnp_before_loop', [ __CLASS__, 'search_results_header' ] );
	}

	/**
	 * Get search results header
	 */
	public static function search_results_header() {
		get_template_part( 'partials/search-query' );
	}
}

Search::init();
