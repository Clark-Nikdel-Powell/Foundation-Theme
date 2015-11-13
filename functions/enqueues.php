<?php
add_action('wp_enqueue_scripts', function(){

	// Register Scripts
	wp_register_script( 'cnp-site', get_template_directory_uri() . '/assets/js/site.min.js', array('jquery'), false, true );
	wp_register_script( 'google-maps', '//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array(), false, true );
	/* @TODO: decide whether this is a good idea or not.
	wp_register_script( 'cnp-foundation-tabs', get_template_directory_uri() . '/bower_components/foundation/js/foundation/foundation.tab.js', array('cnp-site'), false, true );
	*/

	// Enqueue Scripts
	wp_enqueue_script( 'cnp-site' );
	wp_enqueue_script( 'google-maps' );

	// Register Styles
	wp_register_style( 'cnp-css-screen', get_template_directory_uri() . '/assets/css/styles.css', false, date('ynd'), 'screen' );
	wp_register_style( 'cnp-css-print', get_template_directory_uri() . '/assets/css/print.css', false, date('ynd'), 'print' );

	// Enqueue Styles
	wp_enqueue_style( 'cnp-css-screen' );
	wp_enqueue_style( 'cnp-css-print' );

});
