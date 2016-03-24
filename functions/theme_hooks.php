<?php

/**
 * cnp_get_action_suffix.
 *
 * Gets the suffix of a namespaced action, namespacing it either by the queried_object or the post_object.
 *
 * @since 0.3.0
 *
 * @global WP_Post $post Post object.
 *
 * @return string A hyphen-separated type-object string to be appended to the main action name.
 */
function cnp_get_action_suffix() {

	// The return variable.
	$action_suffix = '';

	$object = null;
	$view   = null;

	$queried_object = cnp_parse_queried_object();
	if ( $queried_object ) {
		$object = $queried_object->wp_object;
		$view = $queried_object->view;

		if ( '' !== $object ) {
			$action_suffix .= $object;
		}

		if ( '' !== $view ) {
			$action_suffix .= '-'.$view;
		}
	}

	return $action_suffix;
}

/**
 * @param $action_prefix
 *
 * @return string
 */
function cnp_get_action( $action_prefix ) {

	$action_suffix = cnp_get_action_suffix();

	$action_name = sprintf( '%1s-%2s', $action_prefix, $action_suffix );

	return $action_name;
}