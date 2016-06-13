<?php
/**
 * Enqueues.php is intended for enqueuing CSS & JavaScript files.
 * Documentation: https://github.com/Clark-Nikdel-Powell/Foundation-Theme/wiki/Files
 */
add_action('wp_enqueue_scripts', function(){

	// Deregister Scripts
	wp_deregister_script( 'jquery' );

	// Register Scripts
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-1.12.3.min.js', false, null, true );
	wp_register_script( 'cnp-site', get_template_directory_uri() . '/assets/js/site.min.js', array('jquery'), false, true );
	//wp_register_script( 'google-maps', '//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array(), false, true );

	wp_register_script( 'cnp-foundation-tabs', get_template_directory_uri() . '/node_modules/foundation-sites/js/foundation.tabs.js', array('cnp-site'), false, true );


	// Enqueue Scripts
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'cnp-site' );
	//wp_enqueue_script( 'google-maps' );

	// Register Styles
	wp_register_style( 'cnp-css-screen', get_template_directory_uri() . '/assets/css/styles.css', false, date('ynd'), 'screen' );
	wp_register_style( 'cnp-css-print', get_template_directory_uri() . '/assets/css/print.css', false, date('ynd'), 'print' );

	// Enqueue Styles
	wp_enqueue_style( 'cnp-css-screen' );
	wp_enqueue_style( 'cnp-css-print' );

	wp_dequeue_style('advanced-responsive-video-embedder');
	
});

/**
 * Enqueue Editor Styles
 */
add_editor_style( 'assets/css/editor-style.css' );