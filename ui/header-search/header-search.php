<?php
/**
 * The search header.
 *
 * @package CLIENT_NAMESPACE
 */

global $wp_query;
$s = get_query_var( 's' );
if ( empty( $s ) ) {
	return false;
}

$q = get_search_query();
$n = $wp_query->found_posts;
?>
<h5 class="search-query">Search Results
	<small>Your search for &lsquo;<?php echo esc_html( $q ) ?>&rsquo; returned <?php echo esc_html( $n ); ?> results.</small>
</h5>
