<?php

$copyright_date = new CNP\TemplateLibrary\Content( 'copyright-date', '&copy; Copyright ' . date( 'Y' ) . '<br class="show-for-small-only" /> ' . get_bloginfo( 'site_name' ) );
$copyright_menu = new CNP\TemplateLibrary\Menu( 'copyright-menu', [ 'theme_location' => 'copyright' ] );

$copyright  = new CNP\TemplateLibrary\Container( 'copyright', [ $copyright_date, $copyright_menu ] );
$nav_social = new \CNP\TemplateLibrary\Menu( 'nav-social', [ 'theme_location' => 'social' ] );

$bottom = new CNP\TemplateLibrary\Container( 'bottom', [ $copyright, $nav_social ] );

$footer = new \CNP\TemplateLibrary\Container( 'footer', [ $bottom ], 'footer' );
echo $footer->get_markup();
