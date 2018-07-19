<?php

namespace App\Models;

use App\Core\App;
use App\Core\Database\QueryBuilder;
use App\Core\Request;


class Users extends QueryBuilder
{
	
	protected $table = 'users';

	protected $fillables = [

		'email',

		'firstname',

		'lastname'
	
	];

	public function getUsers()
	{

		return $this->select()->get();

	}


	public function loginUser($email, $password)
	{
		return $this->select()

		->where(['email', '=', $email])

		->and(['password', '=', $password])

		->get();
	}




}