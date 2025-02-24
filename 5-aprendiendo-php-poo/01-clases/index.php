<?php

//programacion Orientada a Objetos en PHP (POO)

//Definir una clase (molde para crear mas objetos de tipo coche con caracteristicas parecidas)

class coche{
    //Atributos o propiedad (variables)
    public $color = "rojo";
    public $marca = "ferrari";
    public $modelo = "aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;
    //métodos, son acciones que hace el objeto (antes funciones)
    public function getcolor(){
        return $this-> color; //busca en esta clase la propiedad X
    }
    
    public function setColor($color){
        $this-> color = $color;
    }
    public function setmodelo($modelo){
        $this-> modelo = $modelo;
    }
    public function acelerar(){
        $this->velocidad++;
    } 
    public function frenar(){
        $this->velocidad--;
    }
    public function getVelocidad(){
    return $this->velocidad;
   }
}//fin definicion de la clase

//crear un objeto coche

$coche = new coche();
//usar un método
echo $coche->getVelocidad();

$coche->setColor("AMARRILO");
echo "el color del coche es".$coche->getcolor(). '<br/>';


$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();
        
        echo "velocidad del coche: ".$coche->getVelocidad();
        
        $coche2 = new coche();
        $coche2->setColor("azul");
        var_dump($coche);
        var_dump($coche2);
        