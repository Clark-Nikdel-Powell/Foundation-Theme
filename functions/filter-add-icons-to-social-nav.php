<?php
namespace CNP;
/**
 * social_menu_icons
 *
 * Adds the social icons to the social menu.
 *
 * @param $menu_items
 * @param $args
 *
 * @return mixed
 */
function social_menu_icons( $menu_items, $args ) {

	if ( 'social-menu' === $args->menu->slug || 'social' === $args->theme_location ) {

		foreach ( $menu_items as $item_key => $menu_item ) {

			$title = $menu_item->title;
			$slug  = str_replace( [ ' ', '&' ], [ '-', 'and' ], strtolower( $title ) );

			$icon = Utility::get_svg_icon( 'icon-' . $slug );

			$menu_items[ $item_key ]->title = '<span class="icon-wrapper">' . $icon . '</span><span class="title">' . $title . '</span>';

		}
	}

	return $menu_items;
}

add_filter( 'wp_nav_menu_objects', 'CNP\social_menu_icons', 20, 2 );
