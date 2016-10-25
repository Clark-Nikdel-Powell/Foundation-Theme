<?php

$field_names = [
	'street_address',
	'city',
	'state',
	'zip_code',
];

$address_data = CNP\Utility::get_acf_fields_as_array( $field_names, true );

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
