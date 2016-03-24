<?php

/**
 * cnp_content_class.
 *
 * Like body_class, but for the content.
 * 
 * Documentation: https://github.com/Clark-Nikdel-Powell/Foundation-Theme/wiki/Files
 *
 * @return string
 */
function cnp_content_class() {

	$classes = [
		'content'
	];

	$classes = apply_filters('cnp_content_class', $classes);

	$classes_attr = 'class="'. implode(' ', $classes) .'"';

	echo $classes_attr;

}