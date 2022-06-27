<?php

$vehiculos = array("coche","moto","camion");
print_r($vehiculos);

echo $vehiculos[0];

for($i=0;$i<3;$i++){
    echo "<br>".$vehiculos[$i];
}

?>