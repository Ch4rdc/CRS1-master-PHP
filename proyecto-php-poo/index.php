<?php

session_start();

require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php'; //importar helpers para poder usarlo
require_once 'views/layaut/header.php';
require_once 'views/layaut/sidebar.php';

$controlador = new UsuarioController();

function error_controller() {
    $error = new errorController();
    $error->index();
}
    if (isset($_GET['controller'])) {
        $nombre_controlador = $_GET['controller'] . 'Controller'; //concatenamos el controller del dato que nos llega por URL   
    } else if (!isset($GET['controller']) && !isset($_GET['action'])) {//para hacer rutas amigables y nos cargue una pagina por defecto
        $nombre_controlador = controller_default; //controlador por defecto en caso de no recibir controlador {parameters.php}
    } else {
        error_controller();
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
            error_controller();
        }
    } else {
        error_controller();
    }

    require_once 'views/layaut/footer.php';
