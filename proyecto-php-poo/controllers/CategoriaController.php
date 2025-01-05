<?php
require_once 'models/categoria.php';
class CategoriaController{
    public function index(){
        Utils::isAdmin(); //Nos indica que esta vista es unica de un administrador
        $categoria = new Categoria();
        $categorias = $categoria->getAll(); //variable disponible para la vista;
        require_once 'views/categoria/index.php';     
    }
    public function crear(){
        Utils::isAdmin(); //Nos indica que esta vista es unica de un administrador
        require_once 'views/categoria/crear.php';
    }
    public function save(){
         Utils::isAdmin(); //Nos indica que esta vista es unica de un administrador
        
         //Guardar la cetegoria en la base de datos
         if(isset($_POST) && isset($_POST['nombre'])){
             $categoria = new categoria();
             $categoria -> setNombre($_POST['nombre']);
             $categoria -> save();
         }
         
         header("Location:".base_url."categoria/index");
    }
    
}

