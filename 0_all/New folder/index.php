<?php
require_once __DIR__ . '/config/Router.php';
require_once __DIR__ . '/helpers/functions.php';
require_once __DIR__ . '/controllers/ProductController.php';

$router = new Router();

$router->get('/products', 'ProductController@index', 'products.index');

$router->get('/products/create', 'ProductController@create', 'products.create');
$router->post('/products/create', 'ProductController@store', 'products.store');

$router->get('/products/{id}/edit', 'ProductController@edit', 'products.edit');
$router->put('/products/{id}/edit', 'ProductController@update', 'products.update');

$router->delete('/products/{id}', 'ProductController@destroy', 'products.destroy');

$router->get('/products/{id}', 'ProductController@show', 'products.show');

$router->dispatch();

?>