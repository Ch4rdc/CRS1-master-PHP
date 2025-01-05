<?php
/*Es una clase donde tenemos clases de utilidades, Son libreria utiles para pequeñas tareas, pequeñas clases con pequeñas funciones 
que nos van a ayudar*/

class Utils{
    
    public static function deleteSession($name){
        if(isset($_SESSION[$name])){
            $_SESSION[$name]=null;
            unset($_SESSION[$name]);
        }
        return $name;
    }
    
    public static function isAdmin(){
        if(!isset($_SESSION['admin'])){
            header("Location:".base_url);
        }else{
            return true;
        }
    }
    public static function showcategorias(){
        require_once 'models/categoria.php';
        $categoria = new categoria();
        $categorias = $categoria->getAll();
        return $categorias;
    }
    
}