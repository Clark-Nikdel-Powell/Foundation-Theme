<?php
/**
 * The site masthead
 *
 * @package CLIENT_NAMESPACE
 */

$nav_secondary = new \CNP\TemplateLibrary\Menu( 'nav-support', [ 'theme_location' => 'support' ] );
$nav_social    = new \CNP\TemplateLibrary\Menu( 'nav-social', [ 'theme_location' => 'social' ] );
$search        = new \CNP\TemplateLibrary\Content( 'search', get_search_form( false ) );

$row_support = new \CNP\TemplateLibrary\Container( 'row-support', [ $nav_secondary, $nav_social, $search ] );

$logo        = new \CNP\TemplateLibrary\Logo( 'logo', 'The Logo' );
$navs_toggle = new \CNP\TemplateLibrary\Link( 'navs-toggle', '#', '<div class="show-for-sr">Open Menu</div><div class="icon-wrapper">' . CNP\Utility::get_svg_icon( 'icon-navicon' ) . '</div>', [
	'data-toggle-class'  => 'menu-open',
	'data-toggle-target' => 'body',
] );

$nav_primary = new \CNP\TemplateLibrary\Menu( 'nav-primary', [ 'theme_location' => 'primary' ] );
$navs        = new \CNP\TemplateLibrary\Container( 'navs', [ $nav_primary ] );

$row_primary = new \CNP\TemplateLibrary\Container( 'row-primary', [ $logo, $navs_toggle, $navs ] );

$masthead = new \CNP\TemplateLibrary\Container( 'masthead', [ $row_support, $row_primary ], 'masthead', '__', 'header' );
echo $masthead->get_markup();
