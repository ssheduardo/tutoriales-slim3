<?php

namespace App\Controllers;

class UserController extends BaseController {

	public function show($request, $response)
	{
		$path = $this->router->pathFor('mt');
		return $this->view->render($response,'index.phtml', compact('path'));
	}
}