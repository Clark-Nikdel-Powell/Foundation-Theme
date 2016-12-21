<?php
$section_header = new CNP\SectionHeader();
$section_header->get_markup();
echo $section_header->markup;

get_template_part( 'partials/nav', 'breadcrumbs' );
