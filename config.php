<?php

return [
		
	'database' => [

		'name' => 'treatout',
		'username' => 'root',
		'password' => '', 
		'connection' => 'mysql:host=localhost',
		'options' => [

			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

			
		]
	]
];