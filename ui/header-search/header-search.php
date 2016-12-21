<?php
global $wp_query;
$s = get_query_var( 's' );
if ( empty( $s ) ) {
	return false;
}

$q = esc_html( get_search_query() );
$n = $wp_query->found_posts;
?>
<h5 class="search-query">Search Results <small>Your search for &lsquo;<?php echo $q ?>&rsquo; returned <?php echo $n ?> results.</small></h5>
