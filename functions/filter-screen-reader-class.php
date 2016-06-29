<?php
namespace CNP;
/**
 * change_screen_reader_class_to_foundation_class
 *
 * @param $template
 *
 * @return mixed
 */
function change_screen_reader_class_to_foundation_class( $template ) {

	$template = str_replace( 'screen-reader-text', 'screen-reader-text show-for-sr', $template );

	return $template;
}

add_filter( 'navigation_markup_template', 'CNP\change_screen_reader_class_to_foundation_class', 20, 1 );
