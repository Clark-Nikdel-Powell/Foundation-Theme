<?php
namespace CNP;
/**
 * cnp_add_svg_icon_sprite
 *
 * Adds the icon sprite file to the top of the page.
 */
function add_svg_icon_sprite() {
	// include_once( get_template_directory() . '/assets/img/icons/icon-sprite.svg' );
}
add_action( 'wp_head', 'CNP\add_svg_icon_sprite', 20 );
