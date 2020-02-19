<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ej1</title>
</head>
<body>

        <h1>Datos personales</h1>
    <?php

        $nombre="Verónica";
        $ape="Toro Gómez";
        $dire="c/Prim 20 G";
        $edad=38;
        $tel="699286422";

        echo "<span style='color:red'>Nombre: </span> $nombre <br/>";
        echo "<span style='color:red'>Apellidos: </span> $ape <br/>";
        echo "<span style='color:red'>Dirección: </span> $dire <br/>";
        echo "<span style='color:red'>Edad: </span> $edad <br/>";
        echo "<span style='color:red'>Teléfono: </span> $tel <br/>";

    ?>
    
</body>
</html>