<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Borrar</title>
</head>
<body>

    
        <?php
           require_once("header.html");
       
        ?>

        <form action="borrar2.php" method="get">
            <label for="Id">Introduzca el código del coche que quiere borrar</label>
            <br>
            <input type="number" name="Id">
            <br>
            <input type="submit" value="Borrar" name="Borrar">
        </form>


    <?php
          require_once("footer.html");
        ?>
         
</body>
</html>