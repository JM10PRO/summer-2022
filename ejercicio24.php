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

$objAlumno = new Persona(); // instancia o creación de un objeto
$objAlumno->asignarNombre("Pablo"); //llamada a un método

$objAlumno2 = new Persona();
$objAlumno2->asignarNombre("Pepe");

$objAlumno2->imprimirNombre();

echo $objAlumno->nombre; //imprimir propiedad

echo $objAlumno2->nombre;
echo $objAlumno2->mostraEdad();

?>