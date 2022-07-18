<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once 'ejercicio36_1.php'; ?> //include_once, identifican que los documentos que se incluyen se repiten y solo muestra uno
    // sigue ejecutando instrucciones
    <?php echo "Siguiente línea de código"; ?>
    <?php include 'ejercicio36_1.php'; ?>
</body>

</html>