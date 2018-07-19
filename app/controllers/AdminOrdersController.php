<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\AdminOrders;

class AdminOrdersController
{
	protected $orders;

	protected $product;

	public function __construct()
	{
		$this->orders = new AdminOrders();

		$this->product = new Product();
	}

	// GET
	public function index()
	{
		$order = $this->orders->getOrders();

		return view('admin-orders/index', compact('order'));

	}

	// GET show resource using specified id
	public function show()
	{ 

		$details = $this->orders->getOrderById($_GET['id']);


		 if ($details) {
			return view('admin-orders/order-details', compact('details'));
		}
	
	}

	// GET show create form
	public function create()
	{
		
	}

	// POST store newly created resource
	public function store()
	{
	
		
	}


	// GET show edit form
	public function edit()
	{

	
	}


	public function customUpdate()
	{

		
	}

	// POST update resource using specified id
	public function update()
	{


	}

	// POST delete resource using specified id
	public function destroy()
	{


	}

}