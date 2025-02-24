
<?php

//FOR
$resultado = 0;

for($i=0; $i<=100;$i++){
    $resultado += $i;
    echo"$resultado";
}
echo "El resultado es $resultado";

//BREAK el break nos permite salir de la ejecucion de un bucle.

if (isset($_GET['numero'])){
    //castear es cambiar el tipo de dato
    $numero = $_GET['numero'];
}
else{
    $numero = 4;
}
   echo "<h1>Tabla de multiplicar del número $numero</h1>";
   
   for ($contador = 1; $contador <=10; $contador++){
       if($numero == 4){
           echo"No se puede mostrar estas operaciones prohibidas";
           break;
       }
       
       echo "$numero x $contador = ".($numero*$contador)."<br/>";
   }

?>


