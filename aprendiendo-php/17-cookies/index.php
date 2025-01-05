<?php

/* Es un fichero que almacena en el ordenador del usuario que visita la web, con el fin de recordar datos
 * o rastrear el comportamiento del mismo en la web.
 */


//crear cookie

//setcookie("nomrbe", "solo pude ser texto",caducudad,dominio);

//cookie basica
setcookie("migalleta","valor de mi gallera");
//cookie con expiracion
setcookie("unyear","valor de mi cookie", time()+60*60*24*364);

?>

<a href="galletas.php">Ver galletas</a>