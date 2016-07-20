<?php
	return [
		'settings' => [
			'displayErrorDetails' => true,
			'logger' => [
				'name' => 'slim-app',
				'path'	=> __DIR__.'/../logs/app.log',
			],
			'renderer' => [
				'template_path' => __DIR__.'/../templates/'
			]
		]
	];