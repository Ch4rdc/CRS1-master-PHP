<?php

$server='localhost';
$username='root';
$password = '';
$database = "newblog";
$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'UTF-8'");

//Iniciar la Sesión
if(!isset($_SESSION)){
SESSION_START();    
}