<?php

namespace App\Core;

class Request
{
	public static function uri()
	{

		return trim(

			parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'

		);

	}


	public static function method()
	{

		return $_SERVER['REQUEST_METHOD'];

	}

	public static function request()
	{
		$request = [];

		foreach ($_POST as $key => $value) {

			$request[$key] = $value;
			
		}

		return $request;
	}
	
}