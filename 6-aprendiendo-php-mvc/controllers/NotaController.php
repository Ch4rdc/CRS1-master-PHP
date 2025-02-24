<?php

class NotaController{
    
    public function listar(){
     //modelo
     require_once 'models/nota.php';
     
     //Logica accion del controlador
     $nota = new nota();
     $nota -> setNombre("hola");
     $nota -> setContenido("Holamundo PHP MVC");
     
    $notas = $nota -> conseguirTodos('notas');
     require_once 'views/nota/listar.php';
    }
    public function Crear(){
        
    }
    public function borrar(){
        
    }
    
    
}
 