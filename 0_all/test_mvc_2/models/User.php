<?php 
require_once 'config/DataBase.php';

class User{
    private $db;

    public function __construct(){
        // $this->db = DataBase::getInstance('orange_store');
        $this->db = DataBase::getInstance();
    }

    public function getUsers(){
        $users = $this->db->query('SELECT * FROM users');
        $users = $users->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
}

?>