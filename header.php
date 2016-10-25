<?php

// $logo    = file_get_contents( get_template_directory() . '/assets/img/logo.svg' );
$logo    = '';
$navicon = CNP\Utility::get_svg_icon( 'icon-ion-navicon' );

$masthead_args = [
	'name'      => 'masthead',
	'tag'       => 'header',
	'structure' => [
		'row-support'   => [
			'class'    => [ 'hide-for-small-only' ],
			'children' => [ 'nav-secondary', 'nav-social', 'search' ],
			'sibling'  => 'row-primary',
		],
		'nav-secondary' => [
			'atom'      => 'Menu',
			'menu-args' => [
				'theme_location' => 'secondary',
			],
		],
		'nav-social'    => [
			'class'     => [ 'nav-social' ],
			'atom'      => 'Menu',
			'menu-args' => [
				'theme_location' => 'social',
			],
		],
		'search'        => [
			'content' => get_search_form( false ),
		],
		'row-primary'   => [
			'children' => [ 'logo', 'navs-toggle', 'navs' ],
		],
		'logo'          => [
			'parts' => [
				'logo-title' => [
					'class'   => [ 'show-for-sr' ],
					'content' => get_bloginfo( 'sitetitle' ),
				],
				'logo-mark'  => $logo,
				'logo-link'  => [
					'atom' => 'FrontPageLink',
				],
				'logo-print' => [
					'class'   => [ 'show-block-for-print' ],
					'content' => $logo,
				],
			],
		],
		'navs-toggle'   => [
			'atom'       => 'Link',
			'href'       => '#',
			'attributes' => [
				'class'              => [ 'hide-for-medium' ],
				'data-toggle-class'  => 'menu-open',
				'data-toggle-target' => 'body',
			],
			'content'    => '<div class="show-for-sr">Open Menu</div><div class="icon-wrapper">' . $navicon . '</div>',
		],
		'navs'          => [
			'children' => [ 'nav-primary' ],
		],
		'nav-primary'   => [
			'atom'      => 'Menu',
			'menu-args' => [
				'theme_location' => 'primary',
			],
		],
	],
];

$masthead = new CNP\OrganismTemplate( $masthead_args );
$masthead->get_markup();
if ( '' !== $masthead->markup ) {
	echo $masthead->markup;
}
