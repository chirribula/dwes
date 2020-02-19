<!DOCTYPE html>
<html lang="es">
<head>
    <title> LISTADO DE COCHES </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Course CSS -->
    <link rel="stylesheet" href="../css/estilo.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    
</head>
<body>
    <?php
            require_once("header.html");
            require_once("conecta.php");

            $sql= "SELECT * FROM coches";
            $resultado=mysqli_query($conexion,$sql);
            if(mysqli_num_rows($resultado)>0){ 
          
    ?>
  
          
        <div class="row justify-content-center align-items-center" >
                <div class="col-lg-4" >
                    <img src="../img/coches.jpg" alt="coche1" class="img-fluid"> 
                </div>
                <div class="col-lg-4" >
                  <img src="../img/coches2.jpg" alt="coche2" class="img-fluid"> 
                </div>
        </div>
        
       
        <div class="row">
                <div class="col-12">   
                    <section>
                        <table class="table table-dark table-striped">
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
                                        <a href="borrar2.php?id=<?= $fila['id'] ?> "><img src="../img/papelera.png" alt="borrar"></a>
                                    </td>
                                    <td>
                                        <a href="modificar.php?id=<?= $fila['id'] ?>"><img src="../img/lapiz.png" alt="modificar"></a>
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
         </div>
        </div>
  
       
    <?php
        require_once("footer.html");
    ?>

</body>
</html>