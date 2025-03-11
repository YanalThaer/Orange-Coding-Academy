<?php

class DataBase { // Singleton class
    private static $instance = null;
    private $db;

    private function __construct() {
        $dsn = 'mysql:host=localhost;dbname=orange_store';
        $username = 'root';
        $password = '';
        
        try {
            $this->db = new PDO($dsn, $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die ('Connection failed' . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            // self::$instance = new DataBase($dataBaseName);
            self::$instance = new DataBase();
        }
        return self::$instance->db;
    }
}

?>