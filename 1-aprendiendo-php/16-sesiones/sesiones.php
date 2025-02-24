<?php

/* 
SESIONES: almacenar y persistir datos del usuario mientras que navega en un sitio web hasta que se cierra la 
 navegacion del sitio web.
 */

//INICIAR LA SESION 

session_start();
//VARIABLE LOCAL
$variable_normal = "Soy una variable normal";
//VARIABLE DE SESION
$_SESSION['hola'] = "HOLA SOY UNA SESION ACTIVA";

echo $variable_normal."<br/>"; 
echo $_SESSION['hola'];