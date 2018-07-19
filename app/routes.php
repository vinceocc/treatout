<?php

$router->get('', 'PagesController@home');

$router->get('login', 'PagesController@login');

$router->post('client/login', 'AuthController@clientLogin');

$router->get('about', 'PagesController@about');

$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');

$router->post('users', 'UsersController@store');

$router->get('admin/products', 'ProductsController@index');

$router->get('admin/productsform', 'ProductsController@create');

$router->get('admin/products/view', 'ProductsController@show');

$router->get('products/update', 'ProductsController@edit');

$router->get('products/custupdate', 'ProductsController@edit');

$router->post('productsaddqty', 'ProductsController@customUpdate');

$router->get('admin-orders', 'AdminOrdersController@index');

$router->get('admin-orders/order-details', 'AdminOrdersController@show');

$router->get('client/index', 'UsersController@index');

$router->get('client/product-category', 'UsersController@show');

$router->patch('admin/productsedit', 'ProductsController@update');

$router->put('admin/products', 'ProductsController@store');

$router->delete('admin/products/delete', 'ProductsController@destroy');

// $router->get('client/product-category', 'ProductsController')







