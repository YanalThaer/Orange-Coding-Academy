<?php

$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/internt-plane':
        require_once 'controller/products.controller.php';
        break;
    case '/mobile-linse':
        require_once 'controller/features.controller.php';
        break;
    case '/':
        require_once 'controller/home.controller.php';
        break;
    default:
        require_once 'views/pages/404.view.php';
        break;
}

?>