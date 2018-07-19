<?php

namespace App\Models;

use App\Core\App;
use App\Core\Database\QueryBuilder;
use App\Core\Request;


class Category extends QueryBuilder
{
	
	protected $table = 'categories';

	protected $fillables = [

		'name'

	];

	public function getCategories()
	{

		return $this->select()->get();

	}

	
}