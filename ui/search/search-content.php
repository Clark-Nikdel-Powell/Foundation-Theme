<?php
/**
 * Search Content
 *
 * @package CLIENT_NAMESPACE
 */

$post_title_link = new CNP\TemplateLibrary\PostTitleLink( 'title' );
$post_date       = new CNP\TemplateLibrary\PostDate( 'date', 'F j, Y' );
$post_author     = new CNP\TemplateLibrary\PostAuthor( 'author' );
$categories      = new CNP\TemplateLibrary\CategoryList( 'categories' );
$excerpt         = new CNP\TemplateLibrary\Excerpt( 'excerpt' );

$post_header = new CNP\TemplateLibrary\Container( 'postheader', [ $post_title_link, $post_date, $post_author, $categories, $excerpt ], 'postheader', '__' );
