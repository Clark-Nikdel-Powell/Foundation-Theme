<?php
add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('cnp-css-screen', get_template_directory_uri() . '/assets/css/styles.css', false, date('ynd'), 'screen');
	wp_enqueue_style('cnp-css-print', get_template_directory_uri() . '/assets/css/print.css', false, date('ynd'), 'print');

	wp_enqueue_script('cnp-site', get_template_directory_uri() . '/assets/js/site.min.js', array('jquery'), false, true);
});
