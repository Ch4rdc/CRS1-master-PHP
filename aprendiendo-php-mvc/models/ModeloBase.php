<?php
//En este modelo base podrian ir todos lo metodos comunes
require_once 'config/database.php';

Class ModeloBase{
    public $db;  
    
    public function __construc(){
        $this->db = database::conectar();
    } 
    public function conseguirTodos($tabla){
        
       $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC");
       return $query;
        
    }
    
    
}