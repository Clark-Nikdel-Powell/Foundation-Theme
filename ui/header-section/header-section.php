<?php
/**
 * Section header
 *
 * Includes a section title, image, and breadcrumbs.
 *
 * @package CLIENT_NAMESPACE
 */

$ancestor = \CNP\get_highest_ancestor();
$current_post = get_queried_object();

// ——————————————————————————————————————————————————————————
// Titles
// ——————————————————————————————————————————————————————————
$ancestor_title_str = '';
if ( isset( $current_post->post_parent ) && 0 !== $current_post->post_parent ) {
	$ancestor_title_str = get_the_title( $current_post->post_parent );
}

$page_title_str = '';
if ( ! empty( $current_post ) && isset( $current_post->post_title ) ) {
	$page_title_str = $current_post->post_title;
}

// Filter each title.
$ancestor_title_str = apply_filters( 'cnp_header_section_ancestor_title', $ancestor_title_str );
$page_title_str     = apply_filters( 'cnp_header_section_page_title', $page_title_str );


// ——————————————————————————————————————————————————————————
// Image set up
// ——————————————————————————————————————————————————————————
$section_image_obj = false;
$section_image_id  = '';

if ( is_singular() ) {
	$page_slug         = apply_filters( 'section_image_slug', $current_post->post_name );
	$section_image_obj = get_section_image( $page_slug );
}

if ( false === $section_image_obj ) {
	$section_image_obj = get_section_image( $ancestor['name'] );
}

if ( false === $section_image_obj ) {
	$section_image_obj = get_section_image( 'header-image' );
}

if ( ! empty( $section_image_obj ) ) {
	$section_image_id = $section_image_obj[0]->ID;
}

// ——————————————————————————————————————————————————————————
// Organism Setup
// ——————————————————————————————————————————————————————————
$image = new \CNP\TemplateLibrary\Image( 'image', $section_image_id, 'large' );

$background = new \CNP\TemplateLibrary\Container( 'background', [ $image ] );

$ancestor_title = new \CNP\TemplateLibrary\Content( 'ancestor-title', $ancestor_title_str );
$page_title     = new \CNP\TemplateLibrary\Content( 'page-title', $page_title_str );

$text = new \CNP\TemplateLibrary\Container( 'text', [ $ancestor_title, $page_title ] );

$header_section = new CNP\TemplateLibrary\Container( 'header-section', [ $background, $text ] );
