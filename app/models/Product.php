<?php

namespace App\Models;

use App\Core\App;
use App\Core\Database\QueryBuilder;
use App\Core\Request;


class Product extends QueryBuilder
{
	
	protected $table = 'products';

	protected $fillables = [

		'name',

		'description', 

		'qtystock', 

		'priceperitem',

	];

	public function getProducts()
	{

		return $this->select()->get();

	}


	public function getProductsById($id)
	{

		return $this->select()->where(['prodid', '=', $id])->get();

	}

	public function editProductsById($id)
	{

		return $this->update($this->filterRequest(Request::request()), $id, 'prodid')->execute();
		//var_dump($this->filterRequest(Request::request()));
	}

	public function deleteProductsById($id)
	{

		return $this->delete($id, 'prodid')->execute();

	}

	public function storeProducts()
	{
		
		return  $this->insert($this->filterRequest(Request::request()))->execute();

	}

	public function getProductsByCategory($id)
	{
		return $this->select()->where(['catid', '=', $id])->get()
;	}
	
}