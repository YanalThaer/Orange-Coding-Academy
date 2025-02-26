<?php

require_once 'model/User.php';

class UserController {
    private $users = [];

    public function displayUserForm() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $user = new User($name, $email);
            $this->users[] = $user;
        }
        
        $users = $this->users;
        require 'view/userView.php';
    }
}
    

?>