<?php
require_once 'models/User.php';

class UserController{
    public function index(){
        $users = new User();
        $users = $users->getUsers();
        require_once 'views/users/show.view.php';
    }

    public function show($id){
        echo "<h1>Showing user with id: $id</h1>";
    }

    public function create() {
        require_once 'views/users/create.user.php';
        
    }
}

?>