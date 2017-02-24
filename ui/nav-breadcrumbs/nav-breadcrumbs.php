<?php
/**
 * Breadcrumbs bar
 *
 * @package CLIENT_NAMESPACE
 */

$breadcrumbs = '';
echo '<div class="breadcrumbs">';
if ( function_exists( 'HAG_Breadcrumbs' ) ) {

	$home_label          = \CNP\Utility::get_svg_icon( 'icon-home' );
	$wrapper_class       = CNP\Utility::get_classes( 'breadcrumbs__inside', 'cnp_breadcrumbs_wrapper' );
	$crumb_class         = CNP\Utility::get_classes( 'breadcrumbs__crumb', 'cnp_breadcrumbs_crumb' );
	$home_crumb_class    = CNP\Utility::get_classes( 'breadcrumbs__home', 'cnp_breadcrumbs_home_crumb' );
	$separator_class     = CNP\Utility::get_classes( 'breadcrumbs__separator', 'cnp_breadcrumbs_separator' );
	$separator_character = CNP\Utility::get_svg_icon( 'icon-chevron-right' );

	$args = array(
		'prefix'          => '',
		'home_class'      => $home_crumb_class,
		'home_show'       => true,
		'home_link'       => true,
		'home_label'      => $home_label,
		'wrapper_element' => 'div',
		'wrapper_class'   => $wrapper_class,
		'wrapper_id'      => '',
		'crumb_element'   => 'span',
		'crumb_class'     => $crumb_class,
		'separator'       => '<span class="' . $separator_class . '>' . $separator_character . '</span>',
		'last_link'       => false,
		'echo'            => true,
		'taxonomy_show'   => true,
		'post_type_show'  => true,
		'post_types'      => array(
			'post'         => array(
				'last_show' => false,
			),
		),
		'return'          => 'array',
	);

	$breadcrumbs = HAG_Breadcrumbs( $args );
}
echo '</div>';
