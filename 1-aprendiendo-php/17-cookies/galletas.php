<?php
/*para mostrar el valor de la cookies hay que usar la variable super global $_COOKIES, Una variable superglobal
 * es simplemente un ARRAY asociativo.*/

if(isset($_COOKIE['migalleta'])){
    echo "<h3>".$_COOKIE['migalleta']."</h3>";
}else{
    echo "La cookie no exite";
}

if(isset($_COOKIE['unyear'])){
echo "<h3>". $_COOKIE['unyear']. "<h3>";
}else{
    echo "la cookie ya existe";
}
?>
  
<a href="borrar_cookie.php">Borrar Cookie</a>

