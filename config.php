<?php
return [

	'database' => [

		'name' => 'crud',
		'username' => 'homestead',
		'password' => 'secret',
		'connection' => 'mysql:host=localhost',
		'options' => [

			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

		]
	]
];
