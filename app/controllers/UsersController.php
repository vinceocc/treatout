<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\Product;
use App\Models\Category;

class UsersController
{

	protected $users;

	protected $products;

	protected $category;

	public function __construct()
	{
		$this->users = new Users();

		$this->products = new Product();

		$this->category = new Category();
	}

	public function index()
	{
		//$prodlist = $this->products->getProducts();

		$catlist = $this->category->getCategories();

		if ($catlist) {
		
			return view('client/index', compact('catlist'));
			// return redirect('client/index');

		}		

	}

	// public function show()
	// {
	// 	$prodlist = $this->products->getProductsByCategory($_GET['id']);
		
	// }




}