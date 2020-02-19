<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>prueba animal</title>
</head>
<body>

<?php
    require_once'gato.php';

    $thorcito = new Gato("macho","snowshoes");  
    $caty = new Gato("hembra","europeo");  

    echo"$thorcito";
    echo $caty;

    echo $thorcito -> duerme();

    echo "<br>";

    echo $caty -> comer('pescado');
    echo $thorcito->comer("puchero");

?>
    
</body>
</html>