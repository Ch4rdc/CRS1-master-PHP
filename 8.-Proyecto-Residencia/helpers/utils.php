<?php

class utils{
    //Todos los hoteles
    public static function showhoteles(){    
        require_once 'models/hotel.php';
        $hotel = new hotel();
        $hoteles = $hotel->getAll();      
        return $hoteles;   
    }
    //todos los departamentos
    public static function showdepartamentos(){
        require_once 'models/departamento.php';
        $departamento = new departamento();
        $departamentos = $departamento->getAll();
        return $departamentos;
    }
    //Todos los ingenieros
    public static function showIngenieros(){      
        require_once 'models/usuario.php';
        $ingeniero = new usuario();
        $ingenieros= $ingeniero->getIngenieros();      
        return $ingenieros;   
    }
    //Validar SuperAdmin
     public static function issuperAdmin(){
        if(!isset($_SESSION['super_admin'])){
            header("Location:".base_url);
        }
            return true;      
    }
    //Validar admin
    public static function isAdmin(){
        if(!isset($_SESSION['ADMIN'])){
            header("Location".base_url);
        }
          return true;
    }
    //borrar alertas
    public static function deleteAlert(){
        $borrado = false;
        if(isset($_SESSION['register']['complete']) || isset($_SESSION['register']['failed'])){
            $_SESSION['register']['complete'] = null;
            $_SESSION['register']['failed'] = null;
             $borrado = true;
        }
        if(isset($_SESSION['login']['failed'])){
            $_SESSION['login']['failed'] = null;
            $borrado = true;
        }  
        if(isset($_SESSION['ticket']['complete'])){
            $_SESSION['ticket']['complete'] = null;
            $borrado = true;
        }
        if(isset($_SESSION['errores'])){
		$_SESSION['errores'] = null;
		$borrado = true;
	}
        if(isset($_SESSION['register_ing']['complete']) || isset($_SESSION['register_ing']['failed'])){
                $_SESSION['register_ing']['complete'] = null;
                $_SESSION['register_ing']['failed'] = null;
                $borrado = true;
        }     
    }
    public static function mostrarError($errores, $campo){
	$alerta = '';
	if(isset($errores[$campo]) && !empty($campo)){
		$alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
	}	
	return $alerta;
}
}
