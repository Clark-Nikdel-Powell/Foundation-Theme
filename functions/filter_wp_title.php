<?php
/**
 * cnp_wp_title
 *
 * Adds the Site Name and/or description to the WP Title
 *
 */
function cnp_wp_title( $title, $sep ) {
	global $paged, $page;

	// ignore feed pages
	if ( is_feed() ) {
		return $title;
	}

	// add site name
	$title .= get_bloginfo( 'name' );

	// add site description for the home/front page
	$desc = get_bloginfo( 'description', 'display' );
	if ( $desc && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $desc";
	}

	//add a page number if necessary
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep Page " . max( $paged, $page );
	}

	return $title;
}

add_filter( 'wp_title', 'cnp_wp_title', 10, 2 );