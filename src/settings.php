<?php
	return [
		'settings' => [
			'displayErrorDetails' => true,
			'logger' => [
				'name' => 'slim-app',
				'path'	=> __DIR__.'/../logs/app.log',
			],
			'renderer' => [
				'template_path' => __DIR__.'/../templates/',
				'cache_path' => __DIR__.'/../cache/'
			],
			'db' => [
	            'database_type' => 'mysql',
	            'database_name' => 'slim3',
	            'server' => 'localhost',
	            'username' => 'root',
	            'password' => 'vagrant',
	            'charset' => 'utf8'
	        ],
		]
	];