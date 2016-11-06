<?php

namespace App\Controllers;

use App\Model\Users;

class UserController extends BaseController {

	public function show($request, $response)
	{
		$path = $this->router->pathFor('mt');
		return $this->view->render($response,'index', compact('path'));
	}

	public function users($request, $response)
	{
		$users = new Users($this->container);
		$all = $users->select('*');
		return $this->view->render($response, 'users', compact('all'));
	}
}