<!doctype html>
<html>
<?php
get_template_part( 'partials/head' );
?>
<body <?php body_class(); ?>>
<div <?php CNP\Utility::echo_classes( [ 'webpage' ], 'cnp_webpage_div' ); ?>>
	<div class="row">
		<div class="column">
<?php
get_header();
