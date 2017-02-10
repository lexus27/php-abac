<?php
/**
 * @created Alexey Kutuzov <lexus27.khv@gmail.com>
 * @Project: php-abac
 */
$combiners = [
	'default' => 'dispute_all',

	'main' => 'dispute_all',

	'delegate' => [
		'default' => 'not_applicable',
		'applicable' => [
			'early'     => true,
			'effect'    => '{current}'
		],
	],

	'delegate_same' => [
		'default' => '{same}',
		'applicable' => [
			'early'     => true,
			'effect'    => '{current}'
		],
	],

	'dispute' => [
		'default'   => '{same}',
		'empty'     => '{same}',
		'applicable' => [
			'check'     => '{!same}',
			'early'     => true,
			'effect'    => '{current}'
		],
	],
	'dispute_all' => [
		'default'   => '{same}',
		'empty'     => '{same}',
		'applicable' => [
			'check' => [[
				'check'     => '{!same}',
				'effect'    => '{current}'
			],[
				'check'     => '{same}',
				'early'     => true,
				'effect'    => '{current}'
			]]
		],
	],


	'permit_by_permit' => [
		'return_only'   => 'permit',
		'default'       => 'not_applicable',
		'empty'         => 'not_applicable',
		'deny'          => [
			'early'         => true,
			'effect'        => 'not_applicable'
		],
		'permit'        => [
			'effect'        => '{current}'
		],
	],

	'deny_by_deny' => [
		'return_only'   => 'deny',
		'default'       => 'not_applicable',
		'empty'         => 'not_applicable',
		'deny'          => [
			'effect'        => '{current}'
		],
		'permit'        => [
			'early'         => true,
			'effect'        => 'not_applicable'
		],
	],


	'same_by_same' => [
		'default'       => 'not_applicable',
		'empty'         => 'not_applicable',
		'applicable' => [
			'check'     => [[
				'check'     => '{!same}',
				'early'     => true,
				'effect'    => 'not_applicable'
			],[
				'check'     => '{same}',
				'effect'    => '{same}'
			]]
		],
	],

	'same' => [

		'default'   => '{same}',
		'empty'     => '{same}',
		'applicable' => [
			'check'     => '{!same}',
			'early'     => true,
			'effect'    => '{current}'
		],

	],

	'same_only' => [
		'default'=> '{same}',
		'not_applicable' => [
			'effect'    => '{current}'
		],
		'applicable' => [
			'check'     => '{!same}',
			'early'     => true,
			'effect'    => '{current}'
		]
	],

];