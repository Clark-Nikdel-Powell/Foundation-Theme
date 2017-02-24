<?php
$post_title = new CNP\TemplateLibrary\PostTitle();
echo $post_title->get_markup();

$content = new CNP\TemplateLibrary\PostContent();
echo $content->get_markup();

edit_post_link( 'Edit this', '<p>', '</p>' );
