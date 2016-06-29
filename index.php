<?php
/**
 * Documentation: https://github.com/Clark-Nikdel-Powell/Foundation-Theme/wiki/Index.php
 */

do_action( 'cnp_before_index' );
do_action( CNP\get_action( 'before_index' ) );

if ( have_posts() ) {

	do_action( 'cnp_before_loop' );
	do_action( CNP\get_action( 'before_loop' ) );

	while ( have_posts() ) {

		the_post();

		do_action( 'cnp_before_content' );
		do_action( CNP\get_action( 'before_content' ) );

		locate_template( CNP\get_content_template_array(), true, false );

		do_action( CNP\get_action( 'after_content' ) );
		do_action( 'cnp_after_content' );
	}

	do_action( CNP\get_action( 'after_loop' ) );
	do_action( 'cnp_after_loop' );

}

do_action( CNP\get_action( 'after_index' ) );
do_action( 'cnp_after_index' );
