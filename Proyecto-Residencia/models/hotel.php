<?php

class hotel{
     private $db;
     public function __construct() {
       $this->db = Database::connect();
    }
     public function getAll(){
         $sql = "SELECT * FROM hoteles;";
        $hoteles = $this->db->query($sql);     
        return $hoteles;
    }  
}
