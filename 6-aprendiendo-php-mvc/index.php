<h1> Bienvenido a mi web con MVC </h1>
<?php 

require_once 'autoload.php';

$controlador = new UsuarioController();
//crear();
//mostrarTodos();
if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';//concatenamos el controller del dato que nos llega por URL
}else{
    echo "La pagina no existe 0";
    exit(); //Para que detenga la ejecicion y lo demas no lo ejecute
}

if(isset($_GET['controller'])){
    $controlador = new $nombre_controlador();
    if(isset($_GET['action'])&& method_exists($controlador, $_GET['action'])){
    $action = $_GET['action'];
    $controlador ->$action();
    }else{
     echo "la pagina que buscas no existe1";
    }
    
}else{
 echo "la pagina que buscas no existe2";   
}

