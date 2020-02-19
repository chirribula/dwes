<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar</title>
</head>
<body>

    
        <?php
            require_once "header.html";
	        require_once("conecta.php");
	        $id= (int) $_GET['id'];
	        $sql="Select * from coches where id=$id";
	        $resul=mysqli_query($conexion,$sql);
	        $fila=mysqli_fetch_assoc($resul);

        
        ?>

        <form action="modificar2.php" method="post">
            <label for="Marca">Marca</label>
            <br>
            <input type="text" name="marca" id="marca" value="<?= $fila['marca'] ?>">
            <br>
            <label for="Modelo">Modelo</label>
            <br>
            <input type="text" name="modelo" id="modelo" value="<?= $fila['modelo'] ?>">
            <br>
            <label for="Precio">Precio</label>
            <br>
            <input type="number" name="precio" id="precio" value="<?= $fila['precio'] ?>">
            <br>
            <label for="Stock">Stock</label>
            <br>
            <input type="number" name="stock" id="stock" value="<?= $fila['stock'] ?>">
            <input type="hidden" name="id" value="<?= $fila['id'] ?>">
            <br>
            <input type="submit" value="Modificar" name="Modificar">
         
        </form>


    <?php
          
          mysqli_close($conexion);
       
          require_once("footer.html");
   
    ?>
         
</body>
</html>