<?php

class Persona{

    public $nombre; //propiedades
    private $edad;
    protected $altura;


    public function asignarNombre($nuevoNombre){ //métodos
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre;
    }

    public function mostraEdad(){
       $this->edad=20;
       return $this->edad;
    }
}

class Trabajador extends Persona{
    public $puesto;

    public function pesentarrseComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }
}

$objTrabajador = new Trabajador();
$objTrabajador ->asignarNombre("Paco");
$objTrabajador ->puesto="Profesor";
$objTrabajador ->pesentarrseComoTrabajador();

?>