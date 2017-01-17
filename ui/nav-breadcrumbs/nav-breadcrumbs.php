<?php
/**
 * Breadcrumbs bar
 *
 * @package WordPress
 */

if ( function_exists( 'HAG_Breadcrumbs' ) ) {

	$wrapper_class = CNP\Utility::get_classes( 'breadcrumbs', 'cnp_breadcrumbs_wrapper' );
	$crumb_class   = CNP\Utility::get_classes( 'crumb', 'cnp_breadcrumbs_crumb' );

	$args = array(
		'prefix'          => '',
		'home_show'       => true,
		'wrapper_element' => 'div',
		'wrapper_class'   => $wrapper_class,
		'wrapper_id'      => '',
		'crumb_element'   => 'span',
		'crumb_class'     => $crumb_class,
		'separator'       => '<span class="interior__breadcrumbs-sep">></span>',
		'last_link'       => false,
		'echo'            => true,
	);

	HAG_Breadcrumbs( $args );
}
