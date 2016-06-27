<?php
namespace CLIENT_NAMESPACE;

/**
 * Class Search
 * @package CLIENT_NAMESPACE
 *
 * Filters and actions for search results.
 */
class Search {

	public static function init() {

		add_action( 'wp_head', function () {

			$s = get_query_var( 's' );

			if ( is_search() || '' !== $s ) {
				self::hook_wordpress();
			}
		} );
	}

	public static function hook_wordpress() {
		add_action( 'cnp_before_loop', [ __CLASS__, 'search_results_header' ] );
	}

	public static function search_results_header() {
		get_template_part( 'partials/search-query' );
	}
}

Search::init();
