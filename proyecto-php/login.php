<?php
//iniciar la sesion;
require_once 'includes/conexion.php';
//inicar la conexion a bd;
//recoger los datos del formulario
//comprobar la contraseña
 
if(isset($_POST)){
    //Borar sesion antiguo, Cuando te logues mal y no se guarde la sesion de ese error;
    if(isset($_SESSION['error_login'])){
             unset($_SESSION['error_login']);
      }
   
    $email = trim($_POST['email']);
    $password = $_POST['password'];
        //consulta para comprobar las credenciales del usuarios
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
   
    $login = mysqli_query($db,$sql);
     
    if($login && mysqli_num_rows($login)== 1){
        $usuario = mysqli_fetch_assoc($login);
        //comprobar contraseña, esta linea compara las contraseñas.
            $verify = password_verify($password, $usuario['password']);
           
            if($verify){
             //realizar una sesion para guardar el usuario
                $_SESSION['usuario'] = $usuario; //guardamos nuestro aarray asociativo de nuestro usuario
                
                
            }else{
                 $_SESSION['error_login']="lOGIN INCORRECTO";
            }
    }else{
        $_SESSION['error_login']="lOGIN INCORRECTO";
    }
}
header('location: index.php');
