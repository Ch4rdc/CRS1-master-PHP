<?php

require_once 'models/usuario.php';

class usuariocontroller {

    //Mostramos el Loggin.
    public function logueo() {
        header("Location: " . base_url . "views/usuario/login.php");
    }

    //Mostramos la vista principal en caso de loguearse correctamente.
    public function inicio() {
        require_once "views/usuario/inicio.php";
    }
    // comprobar datos para acceder a la pagina.
    public function login() {
        if (isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            $identity = $usuario->login();
            if ($identity) {
                $_SESSION['identity'] = $identity;
                if ($identity->rol == 'user') {
                    $_SESSION['user'] = true;
                }
                if ($identity->rol == 'admin') {
                    $_SESSION['admin'] = true;
                }
                if ($identity->rol == 'super_admin') {
                    $_SESSION['super_admin'] = true;
                }
                header("Location:" . base_url . "usuario/inicio");
            } else {
                $_SESSION['login']['failed'] = "failed";            
                header("Location:" . base_url . "views/usuario/login.php");
            }
        }
    }
    //Guardar usuario que se esta registrando.
    public function saves() {
        if (isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            //array de errores
            $errores = array();
            //validar datos antes de guardarlo en la base de datos
            # nombre
            if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
                $nombre_val = true;
            } else {
                $nombre_val = false;
                $errores['nombre'] = "El nombre no es valido";
            }
            # apellidos
            if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
                $apellidos_val = true;
            } else {
                $apellidos_val = false;
                $errores['apellidos'] = "Los apellidos no son válidos";
            }
            # email
            if (!empty($email) && filter_var($email . FILTER_VALIDATE_EMAIL)) {
                $email_val = true;
            } else {
                $email_val = false;
                $errores['email'] = "EL correo no es valido";
            }
            # password   
            if (!empty($password)) {
                $password_val = true;
            } else {
                $password_val = false;
                $errores['password'] = "La contraseña no es valida";
            }           
            $_SESSION['errores'] = $errores;
            if ($nombre_val && $apellidos_val && $email_val && $password_val) {
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
                $save = $usuario->save();
                if ($save) {
                    $_SESSION['register']['complete'] = "complete";
                }else {
                    $_SESSION['register']['failed'] = "failed";
                }
            } else {               
                header("Location:" . base_url . 'views/usuario/registro.php');  
            }
        } else {
            $_SESSION['register']['failed'] = "failed";
        }
        header("Location:" . base_url . 'views/usuario/registro.php');
    }
    //Cerrar las sesiones Activas.
    public function logout() {

        if (isset($_SESSION['identity'])) {
            unset($_SESSION['identity']);
        }
        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        if (isset($_SESSION['super_admin'])) {
            unset($_SESSION['super_admin']);
        }
        header("Location:" . base_url);
    }
    //Mostrar una vista para registrar a ingeniero.
    public function registerIngeniero(){
        require_once "views/super_admin/agregar_ingenieros.php";
    }
    //Guardar el ingeniero que se va a registrar.
    public function saveIngeniero() {
        if (isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            # die("<br/> <br/> <br/>$nombre, $apellidos, $email, $password");
            if ($nombre && $apellidos && $email && $password) {
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
                $save = $usuario->saveIngeniero();
                if ($save) {
                    $_SESSION['register_ing']['complete'] = "complete";
                    header("Location:" . base_url . 'usuario/registeringeniero');
                } else {
                    $_SESSION['register_ing']['failed'] = "failed";
                     header("Location:" . base_url . 'usuario/registeringeniero');
                }
            } else {
                $_SESSION['register_ing']['failed'] = "failed";
                 header("Location:" . base_url . 'usuario/registeringeniero');
            }
        } else {
            $_SESSION['register_ing']['failed'] = "failed";
             header("Location:" . base_url . 'usuario/registeringeniero');
        }
    }
    //Mostramos una vista de acerda de
    public function about() {
        require_once "views/usuario/about.php";
    }

    //Mostramo una vista de dashboard
    public function dashboard() {
        require_once "views/super_admin/dashboard.php";
    }

}
