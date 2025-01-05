<?php
$error = "falta datos";
if(!empty($_POST['nombre']) && !empty($_POST{'apellido'}) && !empty($_POST['edad']) 
&& !empty($_POST['mail']) && !empty($_POST['pass'])){
   
    $error = 'ok';
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $edad = (int)$_POST['edad']; 
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    
    //Validacionar 
    if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
        $error = 'nombre';
    }
    if(!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)){
        $error = 'apellidos';
    }
   if(!is_int($edad)  || !filter_var($edad,FILTER_VALIDATE_INT)){
        $error = 'edad';
    }
    if(!is_string($mail)  || !filter_var($mail,FILTER_VALIDATE_EMAIL)){
        $error = 'mail';
    }
    if(empty($pass) || strlen($pass)<5){
        $error='password';
    }  
}else{
    $error = "faltan valores";
}
var_dump($error);
if($error != 'ok'){
    header("Location:index.php?error=$error");
}
?>

<!DOCTYPE HTML>
<HTML lang="es">
    <HEAD>
        <META charset="UTF-8"/>
        <TITLE>Validacion de formularios PHP</TITLE>
        
    </HEAD>
    <BODY>
        <?php if($error == 'ok'): ?>
        <h1> Datos validados correctamente </h1>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$mail?></p>
        <?php endif; ?>
        
    </BODY>
 </HMTL>