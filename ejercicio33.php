<?php 

$jsonContenido='[ 
    {"nombre":"Pablo", "apellido":"Motos"},
    {"nombre":"Jordi", "apellido":"Cruz"}
 ]';

 $resultado= json_decode($jsonContenido);
 //print_r($resultado);
    foreach($resultado as $persona){
        echo ($persona->nombre)." ".($persona->apellido)."<br>";
    }
?>