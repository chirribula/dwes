<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar</title>
</head>
<body>

    
        <?php
           require_once("header.html");
       
        ?>

        <form action="insertar2.php" method="post">
            <label for="Marca">Marca</label>
            <br>
            <input type="text" name="Marca">
            <br>
            <label for="Modelo">Modelo</label>
            <br>
            <input type="text" name="Modelo">
            <br>
            <label for="Precio">Precio</label>
            <br>
            <input type="text" name="Precio">
            <br>
            <label for="Stock">Stock</label>
            <br>
            <input type="text" name="Stock">
            <br>
            <input type="submit" value="Enviar" name="Enviar">
        </form>


    <?php
          require_once("footer.html");
        ?>
         
</body>
</html>