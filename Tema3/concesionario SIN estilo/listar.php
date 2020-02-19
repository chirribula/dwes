<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado</title>
    <link rel="../css/estilo.css" type="text/css">
    
</head>
<body>
    <?php
            require_once("header.html");
            require_once("conecta.php");

            $sql= "SELECT * FROM coches";
            $resultado=mysqli_query($conexion,$sql);
            if(mysqli_num_rows($resultado)>0){ 
          
    ?>
    
    <section>
           <table style="border:1px solid black;">
                <caption>Coches del concesionario</caption>
                <tr>
                    <th>Identificador</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Borrar</th>
                    <th>Modificar</th>
                </tr>
               


    <?php

           while($fila=mysqli_fetch_assoc($resultado)) {
     ?>          
              <tr>
                  <td>
                     <?=$fila['id']?>
                  </td>
                  <td>
                     <?=$fila['marca']?>  
                  </td>
                  <td>
                     <?=$fila['modelo']?>   
                  </td>
                  <td>
                     <?=$fila['precio']?>  
                  </td>
                  <td>
                    <?=$fila['stock']?>
                  </td>
                
                  <td>
                      <a href="borrar2.php?id=<?= $fila['id'] ?> ">Borrar</a>
                 </td>
                  <td>
                      <a href="modificar.php?id=<?= $fila['id'] ?>">Modificar</a>
                </td>
              </tr>


    <?php
           }    
            }
            else{
                echo "0 Registros";
            }
            mysqli_close($conexion);
            
    ?>


         </table>
    </section>       
    <?php
        require_once("footer.html");
    ?>

</body>
</html>