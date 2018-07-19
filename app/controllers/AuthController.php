<?php

namespace App\Controllers;

use App\Models\Users;

class AuthController
{
	protected $users;

	protected $fillables = [

		'email',

		'password'

	];
	
	public function __construct()
	{
		$this->users = new Users();
	}


	public function clientLogin()
	{
		$check = $this->users->loginUser($_POST['email'], $_POST['password']);

		if ($check) {
			foreach ($check as $value) {

				$_SESSION['login'] = true;
				$_SESSION['userid'] = $value->usersid;
				$_SESSION['firstname'] = $value->firstname;
			}
			return redirect('client/index');
		}
	return redirect('login');
	}

	public function logout()
	{
		
	}
}
