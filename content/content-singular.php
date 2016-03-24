<?php

$singular_header = new CNP\PostHeaderSingular();
$singular_header->getMarkup();
echo $singular_header->markup;

// Post body
the_content();
edit_post_link( 'Edit this', '<p>', '</p>' );
