<?php

class Persona{

    public $nombre; //propiedades
    private $edad;
    protected $altura;

    function __construct($nuevoNombre){
        $this-> nombre=$nuevoNombre;
    }


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

$objAlumno = new Persona("Pablo P"); // instancia o creación de un objeto
//$objAlumno->asignarNombre("Pablo"); //llamada a un método
$objAlumno->imprimirNombre();
?>