<?php
//Conectar a la base de datos
$conexion = mysqli_connect("localhost","root", "", "phpmysql");

//comprobar si la conexion es correcta

if(mysqli_connect_errno()){
    echo "La conexion a la base de datos MYSQL ha fallado".mysqli_connect_error();
}else{
    echo "Conexion realizada correctamente"."<br/>";
}
//consulta para configurar la codifiacion de caracteres

mysqli_query($conexion, "SET NAMES 'UTF-8' "); //Si la base de datos devuelve alguna tild o ñ lo muestre correctamente

$notas = mysqli_query($conexion, "SELECT *  FROM notas");
while($nota = mysqli_fetch_assoc($notas)){
    
    echo $nota['titulo'].'<br>';
    echo $nota['descripcion'].'<br>';
    echo $nota['color'].'<br>';
}
//insertar en la base de datos desde PHP

$sql = "INSERT INTO notas VALUES(null,'Notas desde PHP','Esto es una nota de PHP','green')";
$insert = mysqli_query($conexion, $sql);

echo "<hr>";

if($insert){
    echo "DATOS INSERTADOS CORRECTAMENTE";
}else{
    echo "Error: ".mysqli_error($conexion);
}