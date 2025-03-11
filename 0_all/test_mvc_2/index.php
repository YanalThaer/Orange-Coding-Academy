<?php

require_once __DIR__.'/helpers/functions.php';
// require_once __DIR__.'/config/router.php';
// require_once __DIR__.'/config/RouterNew.php';

// $router = new Router();


require_once __DIR__.'/config/RouterTwo.php';
require_once __DIR__.'/controllers/ProductController.php';
require_once __DIR__.'/controllers/UserController.php';

$router = new RouterTwo();

$router->get('/products' , 'ProductController@index' , 'product.index');
$router->get('/products/{id}' , 'ProductController@show' , 'product.show');



$router->get('/users' , 'UserController@index' , 'user.list');
$router->get('/users/{id}' , 'UserController@show' , 'user.show');


$router->dispatch();



// var_dump(__DIR__);

// $dsn = 'mysql:host=localhost;dbname=orange_store';
// $username = 'root';
// $password = '';


// try {
//     $db = new PDO($dsn, $username, $password);
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo 'Connected';
// } catch (PDOException $e) {
//     // echo $e->getMessage();
//     die ('Connection failed' . $e->getMessage());
// }

// require_once __DIR__.'/config/DataBase.php';


// echo __DIR__;

// $uri = $_SERVER['REQUEST_URI'];

// switch ($uri) {
//     case '/internt-plane':
//         require_once __DIR__.'/controller/products.controller.php';
//         break;
//     case '/mobile-linse':
//         require_once __DIR__.'/controller/features.controller.php';
//         break;
//     case '/':
//         require_once __DIR__.'/controller/home.controller.php';
//         break;
//     default:
//         require_once __DIR__.'/views/pages/404.view.php';
//         break;
// }


?>  