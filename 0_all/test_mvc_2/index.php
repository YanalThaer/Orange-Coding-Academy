<?php

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


echo __DIR__;
require_once __DIR__.'/controller/products.controller.php';

?>  