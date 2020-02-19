<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2 - Vehiculos</title>
    </head>
    <body>
        <?php
            
            include_once '../Objetos/Coche.php';
            include_once '../Objetos/Bicicleta.php';
            
            $coche1 = new Coche(1200);
            $coche1->recorre(100);
            echo "Coche: ".$coche1->getKmRecorridos()."Km<br>";
            $coche1->recorre(120);
            echo "Coche: ".$coche1->getKmRecorridos()."Km<br>";
            echo $coche1->quemaRuedas()."<br>";
            $bici1 = new Bicicleta(3);
            $bici1->recorre(6);
            $bici1->recorre(10);
            echo "Bici: ".$bici1->getKmRecorridos()."Km<br>";
            echo $bici1->hazCaballito()."<br>";
            echo Vehiculo:: getVehiculosCreados()." Vehiculos<br>";
            echo Vehiculo:: getKmTotales()."Km totales <br>";
        ?>
    </body>
</html>
