<?php

class Router {
    public function __construct() {
        $this->loadController();
    }

    public function loadController() {
        $controller = 'products';
        $controllerFile = 'controller/'.$controller.'.controller.php';
        if (file_exists($controllerFile)) {
            require_once($controllerFile);
        } else {
            require_once('views/pages/404.view.php');
        }
    }
}

?>