<?php
namespace CLIENT_NAMESPACE;
/**
 * mce_buttons_2
 *
 * Add the formats dropdown box to the second row of the TinyMCE editor.
 *
 * @since 1.0.0
 *
 * @param array $buttons The buttons of the second row of the TinyMCE toolbar.
 *
 * @return array The array with the "Formats" option added.
 */
function mce_buttons_2( $buttons ) {

	array_unshift( $buttons, 'styleselect' );

	// Turn off the text color picker. Set these colors via classes instead.
	if ( ( $key = array_search( 'forecolor', $buttons ) ) !== false ) {
		unset( $buttons[ $key ] );
	}

	return $buttons;
}

add_filter( 'mce_buttons_2', 'CLIENT_NAMESPACE\mce_buttons_2' );

/**
 * mce_before_init_insert_formats.
 *
 * Adds new styles to the TinyMCE editor so that we don't have
 * to add classes / spans to items ourselves.
 *
 * Also adds approved colors to the text color picker.
 *
 * @since 1.0.0
 *
 * @param array $init_array The init array for all the TinyMCE options.
 *
 * @return array The init array, with the additional format styles appended.
 */
function mce_before_init_insert_formats( $init_array ) {

	// Define the style_formats array
	$style_formats = array(
		array(
			'title'    => '',
			'selector' => '',
			'classes'  => [ '' ],
		),
	);

	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );

	return $init_array;
}

add_filter( 'tiny_mce_before_init', 'CLIENT_NAMESPACE\mce_before_init_insert_formats' );
