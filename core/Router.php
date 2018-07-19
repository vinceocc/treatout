<?php

namespace App\Core;

use App\Core\Request;


class Router 
{
	public $routes = [

		'GET' => [],

		'POST' => [],

        'PATCH' => [],

        'PUT' => [],

        'DELETE' => []

	];


	public static function load($file)
	{
		$router = new static; 
		 
		require $file;

		return $router; 
	}

	public function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
	} 

	public function post($uri, $controller) 
	{	
		$this->routes['POST'][$uri] = $controller;
	}

	public function put($uri, $controller)
	{
		$this->routes['PUT'][$uri] = $controller;
	}

	public function patch($uri, $controller)
	{
		$this->routes['PATCH'][$uri] = $controller;
	}

	public function delete($uri,$controller)
	{
		$this->routes['DELETE'][$uri] = $controller;
	}


	public function direct($uri, $requestType)
	{

		if (isset(Request::request()['_method'])) {  //filter request type

			$requestType = Request::request()['_method'];

			return $this->callAction(

				...explode('@', $this->routes[$requestType][$uri])

			);
		
		}
		if (array_key_exists($uri, $this->routes[$requestType])) {   

			return $this->callAction(

					...explode('@', $this->routes[$requestType][$uri])

		 		);
			
		 }		
		 echo "No route found for {$uri}";

	}



	protected function callAction($controller, $action)
	{

		$controller = "App\\Controllers\\{$controller}";

		$controller = new $controller;

		if (! method_exists($controller, $action)) {

			throw new Exception(
				
				"{$controller} does not respond to the {$action} action." 

			);
			
		}
		
		 return $controller->$action();

	}

	





}