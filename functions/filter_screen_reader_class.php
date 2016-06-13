<?php
/**
 * cnp_social_menu_icons
 *
 * Adds the social icons to the social menu.
 *
 */
add_filter( 'wp_nav_menu_objects', 'cnp_social_menu_icons', 20, 2 );

function cnp_social_menu_icons( $menu_items, $args ) {

	if ( 'social' === $args->menu->slug  ) {

		foreach ( $menu_items as $item_key => $menu_item ) {

			$title = $menu_item->title;
			$slug  = str_replace( [ ' ', '&' ], [ '-', 'and' ], strtolower( $title ) );

			$icon = CNP\Utility::getSvgIcon( 'icon-' . $slug );

			$menu_items[ $item_key ]->title = '<span class="icon-wrapper">' . $icon . '</span><span class="title">' . $title . '</span>';

		}
	}

	return $menu_items;
}
