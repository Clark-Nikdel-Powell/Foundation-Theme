<?php

/**
 * cnp_template_selection
 *
 * This function intercepts WordPress' template loader so
 * that we can use base.php as a theme wrapper, and then
 * include the selected template.
 *
 * NOTE: This filter function applies a filter itself. You may
 * call a custom path for a template file, if necessary.
 *
 * Adapted from Roots' "Sage" theme.
 *
 * @param string $wordpress_template The template that WordPress selects.
 * @return array $templates The templates array.
 **/
function cnp_template_selection( $wordpress_template ) {

	global $main_template;
	$main_template = $wordpress_template;

	$base = basename($wordpress_template, '.php');

	if ( 'index' === $base ) {
		$base = FALSE;
	}

	$template = 'base.php';
	$slug = $base;
	$templates = array($template);

	if ( FALSE !== $base ) {
		$str = substr( $template, 0, -4 );
		array_unshift( $templates, sprintf( $str . '-%s.php', $base ) );
	}

	$templates = apply_filters( 'cnp_wrap_' . $slug, $templates );

	return locate_template($templates);

}
add_filter('template_include', 'cnp_template_selection', 99, 1);

/**
 * cnp_template_path
 *
 * @return array $main_template The template to load in the base.php file.
 **/
function cnp_template_path() {

	global $main_template;
	return $main_template;

}