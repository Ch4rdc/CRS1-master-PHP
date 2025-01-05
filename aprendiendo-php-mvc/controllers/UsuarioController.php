<?php

 class UsuarioController{
     public function mostrarTodos(){
       require_once 'models/usuario.php';
       $usuario = new usuario();
       
       $todos_los_usuarios = $usuario->conseguirTodos();
       require_once 'views/usuario/mostrar-todos.php';
       
     }
     public function crear(){
         require_once 'views/usuario/crear.php';
     }
 }
