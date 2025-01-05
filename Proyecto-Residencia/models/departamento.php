<?php
class departamento{
     private $db;
     public function __construct() {
       $this->db = Database::connect();
    }
     public function getAll(){
        $departamentos = $this->db->query("SELECT * FROM departamentos ");
        return $departamentos;
    }  
}
