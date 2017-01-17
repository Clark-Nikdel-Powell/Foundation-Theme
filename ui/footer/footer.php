<?php

$footer_args = [
	'name'      => 'footer',
	'structure' => [
		'bottom'     => [
			'children' => [ 'copyright', 'nav-social' ],
		],
		'copyright'  => [
			'parts' => [
				'copyright-date' => [
					'content' => '&copy; Copyright ' . date( 'Y' ) . '<br class="show-for-small-only" /> ' . get_bloginfo( 'site_name' ),
				],
				'copyright-menu' => [
					'atom'      => 'Menu',
					'menu-args' => [
						'theme_location' => 'copyright',
					],
				],
			],
		],
		'nav-social' => [
			'atom'      => 'Menu',
			'menu-args' => [
				'theme_location' => 'social',
			],
			'class'     => [ 'nav-social' ],
		],
	],
];

$footer = new CNP\OrganismTemplate( $footer_args );
$footer->get_markup();
if ( '' !== $footer->markup ) {
	echo $footer->markup;
}
