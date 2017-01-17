<?php
/**
 * Section header
 *
 * Includes a section title, image, and breadcrumbs.
 *
 * @package CLIENT_NAMESPACE
 */

$section_header = new CNP\SectionHeader();
$section_header->get_markup();
echo $section_header->markup;

get_template_part( 'partials/nav', 'breadcrumbs' );
