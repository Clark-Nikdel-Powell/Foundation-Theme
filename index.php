<?php
/**
 * Index
 *
 * Used for The Loop for all archive pages (ideally).
 *
 * @package CLIENT_NAMESPACE
 */

do_action( 'cnp_before_index' );

if ( have_posts() ) {

	do_action( 'cnp_before_loop' );

	while ( have_posts() ) {

		the_post();

		do_action( 'cnp_before_content' );

		locate_template( CNP\get_content_template_array(), true, false );

		do_action( 'cnp_after_content' );
	}

	do_action( 'cnp_after_loop' );

}

do_action( 'cnp_after_index' );
