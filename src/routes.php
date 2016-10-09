<?php

$app->get('/', function($request, $response, $args){
	$this->logger->addInfo('In home');
	return $response->write('Welcome to home');
});

$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
});

$app->get('/home/[{name}]', function($request, $response, $args){

	return $this->view->render($response,'index.phtml', $args);
});

$app->get('/test','UserController:show')->setName('mt');
$app->get('/users','UserController:users')->setName('users');