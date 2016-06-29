<?php
namespace CNP;
/**
 * filter_acf_flexible_content_layouts_title
 *
 * Adds the Flex Content name to the title bar, so that you can see what it is when the layout fields are collapsed.
 *
 * @param $title
 * @param $field
 * @param $layout
 * @param $i
 *
 * @return string
 */
function filter_acf_flexible_content_layouts_title( $title, $field, $layout, $i ) {

	$label = '';
	$label = get_sub_field( 'label' );

	if ( '' !== $label ) {
		$title .= ': ' . $label;
	}

	return $title;

}

add_filter( 'acf/fields/flexible_content/layout_title/name=layouts', 'CNP\filter_acf_flexible_content_layouts_title', 20, 4 );
