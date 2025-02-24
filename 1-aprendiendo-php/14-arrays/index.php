<?php

/* 
ARRAYS -: Un Array es una colección o un conjunto de datos / valores, bajo un unico nombre, 
 para acceder a esos datos se accede desde un indice numerico o alphanumerico.
 */


/***** Crear y trabajar un array *****/

//Forma una de declarar un array
$pelicula = "batman";
$peliculas = array( 'batman', 'spiderman', 'rescatando al soldado ryan');
//Forma dos de declarar un array
$cantantes = ['2pac', 'drake','the black eyed peas'];

//echo $peliculas[0];

/***** Recorrer arrays (for y foreach) *****/

//FOR
echo "<lu>";
for($i=0; $i< count($peliculas); $i++){
    echo"<li>".$peliculas[$i]."</li>";
}
echo "</ul>";

echo "<lu>";
for($x=0; $x< count($cantantes); $x++){
    echo "<li>".$cantantes[$x]."</li>";
}
echo "</ul>";
//FORECH
echo "<h1> La lista de cantantes son </h1";

echo "<ul>";

foreach ($cantantes as $cantante){
    echo "<li>".$cantante ."</li>";
}

echo "</ul>";

/***** Arrays asociativos *****/
echo " </br>";
$personas = array(
    'nombre' => 'fakejosshochar',
    'apellidos' => 'SuperDC',
    'Edad' => '23'
);

var_dump($personas['nombre']);

/***** Arrays Multidimensionales *****/

$contactos = array (
    array(
        'nombre' => 'pedro',
        'numero' => '9988658837'
    ),
    array(
         'nombre' => 'Alfredo',
        'numero' => '998867322'
    ),
    array(
        'nombre' => 'ingrid',
        'numero' => '9988765432'
    )
);

foreach ($contactos as $key => $contacto){
    var_dump($contacto['nombre']);
}