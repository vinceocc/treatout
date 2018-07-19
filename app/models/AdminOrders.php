<?php

namespace App\Models;

use App\Core\App;
use App\Core\Database\QueryBuilder;
use App\Core\Request;


class AdminOrders extends QueryBuilder
{
	
	protected $table = 'orders';

	protected $fillables = [

			
	];

	public function getOrders()
	{

		return $this->select()

		->join('orderproducts', 'orders.ordersid', '=', 'orderproducts.ordersid')

		->join('users', 'orders.usersid', '=', 'users.usersid')

		->limit('1')

		->get();

	}


	public function getOrderById($id)
	{
		return $this->select()

		->join('orderproducts', 'orders.ordersid', '=', 'orderproducts.ordersid')

		->join('products', 'orderproducts.prodid', '=', 'products.prodid')

		->get();
	}
	


}