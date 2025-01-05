<?php

if(isset($_POST)){
    //conexion a la base de datos   
    require_once 'includes/conexion.php';
    
    //ternaria sustito de comprobar si llegan datos en las respectivas variables    
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;

    //array de errores
    $errores = array();
    
    //validar datos antes de guardarlos en la base de datos
    //validar campo nombre
    
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
     
    } else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
         
    }
    
    if(count($errores)== 0){
        $sql = "INSERT INTO categorias VALUES(NULL, '$nombre');";
                $guardar = mysqli_query($db, $sql);
    }
    
   header('location: crear-categoria.php');
}

