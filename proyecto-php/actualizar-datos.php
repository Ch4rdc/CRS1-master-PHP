<?php

if(isset($_POST)){
     require_once 'includes/conexion.php';
     if(!isset($_SESSION)){
         session_start();
     }
     
    //Recoger los valores del formulario de actualizar
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    $apellidos =  isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;
    $email =  isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) : false; //trim para quitar espacios
   
    //array de errores 
    $errores = array();
    
    //validar los datos antes de guardarlos en la base de datos
    # nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
        $nombre_validado = true;
  
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }
# apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
		$apellidos_validado = true;
	}else{
		$apellidos_validado = false;
		$errores['apellidos'] = "Los apellidos no son válidos";
	}
# email
    if(!empty($email) && filter_var($email. FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = "El email no es valido";
    }
   
    $guardar_usuario = false;
    if(count($errores)==0){
        
         $usuario = $_SESSION['usuario']; 
        $sql = "SELECT id, email FROM usuarios  WHERE email = '$email'";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);
        
      if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
        
          //ACTUALIZAR USUARIO EN LA TABLA  USUARIOS DE LA BASE DE DATOS.
       
        $sql = "UPDATE usuarios SET ". 
               "nombre = '$nombre', ".
               "apellidos = '$apellidos', ".
               "email = '$email' ".
               "WHERE id = ".$usuario['id']; /*en caso de no crear la variable*/ 
              
        $guardar = mysqli_query($db, $sql);
        //Mostar error en caso de fallo
         
        if($guardar){
            $_SESSION['usuario']['nombre'] = $nombre;
            $_SESSION['usuario']['apellidos'] = $apellidos;
            $_SESSION['usuario']['email'] = $email;
            
            $_SESSION['completado'] = "Tus datos se han actualizado con exito";
           
        }else{
            $_SESSION['errores']['general'] = "fallo al guardar el actualizar los datos !!";
        }
      }else{
            $_SESSION['completado'] = "el correo ya existe";
      } 
    }else{
           
    }
    $_SESSION['errores'] = $errores; 
}
 header('Location: mis-datos.php');
