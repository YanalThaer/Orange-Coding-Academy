<?php

class BaseModel {
    private $db;

    public function __construct(){
        // $this->db = DataBase::getInstance('orange_store');
        $this->db = DataBase::getInstance();
    }

    public function getTabelName($tableName){
        $table = $this->db->query('SELECT * FROM $tableName');
        $table = $table->fetchAll(PDO::FETCH_ASSOC);
        return $table;
    }
}

?>