<?php


if(isset($_POST)){
     require_once 'includes/conexion.php';
     if(!isset($_SESSION)){
         session_start();
     }
     
    //Recoger los valores del formulario del registro
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    $apellidos =  isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;
    $email =  isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) : false; //trim para quitar espacios
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db,$_POST['password']) : false;
    
      
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
 # password   
    if(!empty($password)){
        $password_validado = true;
    }else{
        $password_validado = false;
        $errores['password'] = "Introduce una contraseña";
    }
    
    $guardar_usuario = false;
    if(count($errores)==0){
        
        //CIFRAR LA CONTRASEÑA
        $password_segura = password_hash($password,PASSWORD_BCRYPT,['cost'=>4]);
         
        //INSERTAR USUARIO EN LA BASE DE DATOS
        $sql = "INSERT INTO usuarios VALUES(null,'$nombre','$apellidos', '$email','$password_segura',CURDATE());";
        $guardar = mysqli_query($db, $sql);
        //Mostar error en caso de fallo
        # var_dump(mysqli_error($db));
        # die();
        if($guardar){
            $_SESSION['completado'] = "El registro de ha completado con exito";
        }else{
            $_SESSION['errores']['general'] = "fallo al guardar el usuario!!";
        }
    }else{
        $_SESSION['errores'] = $errores; 
        
    }
}
header('Location: index.php');
