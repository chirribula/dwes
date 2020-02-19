<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        Require_once 'matematicas.php';   //carga la función matemática
        $numero = $_POST['numero']; 
        if (!isset($numero)) { 
    ?>

        <p>Introduzca un número para saber si es primo o no.</p><br/> 
        <form action=numeroPrimo2.php method="post"> 
            <input type="number" name="numero" min="0" autofocus><br/> 
            <input type="submit" value="Aceptar"> 
        </form>

    <?php 

        }else {
            if (esPrimo($numero)) { 
                echo "El $numero es primo."; 
                } else { 
                    echo "El $numero no es primo."; 
                } 
            } 
    ?>
    
</body>
</html>
