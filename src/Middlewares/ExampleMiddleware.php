<?php

namespace App\Middlewares;

class ExampleMiddleware extends BaseMiddleware
{
	public function __invoke($request, $response, $next)
	{
		$response->getBody()->write(' class 1 ');
		$response = $next($request, $response);
		$response->getBody()->write(' class 2 ');
		return $response;
	}
}