<?php

/* 

 */

if(isset($_COOKIE['migalleta'])){
     unset($_COOKIE['migalleta']);
     
     setcookie('mi galleta', '', time()-100);
}else{
    echo "No existe esta cookie";
}

header('Location:index.php');


