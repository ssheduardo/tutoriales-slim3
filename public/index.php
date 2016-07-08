<?php
session_start();

require __DIR__.'/../vendor/autoload.php';
$settings = require __DIR__.'/../src/settings.php';
$app = new Slim\App($settings);
require __DIR__.'/../src/dependencies.php';

$app->get('/', function($request, $response, $args){
	$this->logger->addInfo('In home');
	return $response->write('Welcome to home');
});

$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
});

$app->run();