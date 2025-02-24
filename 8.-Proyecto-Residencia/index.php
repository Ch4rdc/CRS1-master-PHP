<?php
session_id();
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'helpers/utils.php'; 
require_once 'config/parameters.php';
require_once 'views/layout/header.php';

function show_error(){
    $error = new errorcontroller();
    $error->index();
}
    $controlador = new UsuarioController();
   if (isset($_GET['controller'])) {
        $nombre_controlador = $_GET['controller'] . 'Controller'; //concatenamos el controller del dato que nos llega por URL   
    } else if (!isset($GET['controller']) && !isset($_GET['action'])) {//para hacer rutas amigables y nos cargue una pagina por defecto
        $nombre_controlador = controller_default; //controlador por defecto en caso de no recibir controlador {parameters.php}
    } else {
        show_error();
        exit(); //Para que detenga la ejecicion y lo demas no lo ejecute
    }
    if (class_exists($nombre_controlador)) {
        $controlador = new $nombre_controlador();
        if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
            $action = $_GET['action'];
            $controlador->$action();
        } else if (!isset($_GET['controller']) && !isset($_GET['action'])) {
            $action_default = action_default;
            $controlador->$action_default();
        } else {
            show_error();
        }
    } else {
        show_error();
    }
    
require_once 'views/layout/end.php';
