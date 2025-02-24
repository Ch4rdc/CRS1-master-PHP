<?php
if(!isset($_SESSION)){
SESSION_START();    
}


if(!isset($_SESSION['usuario'])){  
    header("Location: index.php");
}
