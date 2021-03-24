<?php

return [
	'database' => [
		'name' => 'pms',
		'username' => 'root',
		'password' => '',
		'connection' => '127.0.0.1',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
		]
	],

	'app' => [
		'name' => 'test_pdo'
	]
];
