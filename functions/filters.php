<?php
/**
 * Intended to be used for site-wide filters.
 * Documentation: https://github.com/Clark-Nikdel-Powell/Foundation-Theme/wiki/Files
 */

add_filter( 'navigation_markup_template', 'change_screen_reader_class_to_foundation_class');
/**
 * change_screen_reader_class_to_foundation_class.
 *
 * Adds  Foundation's screen-reader class to WordPress pagination header screen-reader class.
 *
 * @param $template
 *
 * @return mixed
 */
function change_screen_reader_class_to_foundation_class( $template ) {

	$template = str_replace( 'screen-reader-text', 'screen-reader-text show-for-sr', $template );

	return $template;
}