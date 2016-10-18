<?php
$a = function($request, $response, $next) {
	$response->getBody()->write(' INICIO MIDDLEWARE ');
	$response = $next($request, $response);
	$response->getBody()->write(' FIN MIDDLEWARE ');
	return $response;
};

$b = function($request, $response, $next) {
	$response->getBody()->write(' -1- ');
	$response = $next($request, $response);
	$response->getBody()->write(' -2- ');
	return $response;
};

//$app->add($a);