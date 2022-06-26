<?php

if ($_POST) {
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];
    //Operaciones
    $suma=$valorA+$valorB;
    $resta=$valorA-$valorB;
    $multiplication=$valorA*$valorB;
    $division=$valorA/$valorB;
    echo $suma;
    echo "<br>".$resta;
    echo "<br>".$multiplication;
    echo "<br>".$division;

    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    <form action="ejercicio11.php" method="post">
    valor A:
    <input type="text" name="valorA" id="">
    <br>
    valor B:
    <input type="text" name="valorB" id="">
    <br>
    <input type="submit" value="Calcular">
    </form>
</body>
</html>