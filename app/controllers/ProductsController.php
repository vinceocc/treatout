<?php

namespace App\Controllers;

use App\Models\Product;

class ProductsController
{
	protected $product;

	public function __construct()
	{
		return $this->product = new Product();
	}

	// GET
	public function index()
	{
		$products = $this->product->getProducts();	

		return view('admin/products/index', compact('products'));
	}

	// GET show create form
	public function create()
	{
		return view('admin/products/productsform');
	}

	// POST store newly created resource
	public function store()
	{
		if ($this->product->storeProducts()) {
			// return to index with success message
			return redirect('admin/products');
		}
		return 'Error inserting data.';
	
	}

	// GET show resource using specified id
	public function show()
	{ 
		$productsedit = $this->product->getProductsById($_GET['id']);

		 if ($productsedit) {
			return view('admin/products/productsedit', compact('productsedit'));
		}
	
	}

	// GET show edit form
	public function edit()
	{
		$productsqtyform = $this->product->getProductsById($_GET['id']);

		 if ($productsqtyform) {

			return view('admin-products/productsqtyform', compact('productsqtyform'));

		}
	
	}


	public function customUpdate()
	{
		$customUpdate = $this->product->updateQuantityById();

		return redirect('admin-products/products');
		
	}

	// POST update resource using specified id
	public function update()
	{
		$update = $this->product->editProductsById($_GET['id']);

		if($update) {

			return redirect('admin/products');

		}
	}

	// POST delete resource using specified id
	public function destroy()
	{
		$delete = $this->product->deleteProductsById($_GET['id']);

		return redirect('admin/products');
		
	}

}