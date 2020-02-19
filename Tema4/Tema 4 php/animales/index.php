<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1 - Animales</title>
    </head>
    <body>
        <?php
            
            include_once '../Objetos/Gato.php';
            
            $gato1 = new Gato("Hembra");
            $gato2 = new Gato("Macho", "Egipcio");
            $gato3 = new Gato("Hembra");
            
            echo $gato1->comer('Pescado')."<br>";
            echo $gato2->getRaza()."<br>";
            echo $gato3->aseate()."<br>";
        ?>
    </body>
</html>
