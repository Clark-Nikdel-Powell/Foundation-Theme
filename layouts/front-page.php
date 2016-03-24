<?php

// TODO: use named functions here so the hooks can be removed if necessary.
add_action( 'cnp_after_header', function () {

	if ( is_front_page() ) {
		get_template_part( 'partials/header-home' );
	}
} );

add_filter('cnp_content_class', function($classes) {

	if ( is_front_page() ) {
		$classes[] = 'column';
	}

	return $classes;
});