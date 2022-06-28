<?php

session_start();

$_SESSION["usuario"]="Pablo";
$_SESSION["status"]="logueado";

echo "Sesión iniciada".":<br>";
echo "Usuario: ".$_SESSION["usuario"]." status: ".$_SESSION["status"];
?>