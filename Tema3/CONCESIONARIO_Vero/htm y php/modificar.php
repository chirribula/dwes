<!DOCTYPE html>
<html lang="es">
<title> MODIFICAR </title>
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
            session_start();   //inico sesión
            require_once("conecta.php");
            require_once "header.html";

            if(isset($_SESSION['errores'])){
                foreach ($_SESSION['errores'] as $value) {                                         
                    echo "<div>* $value </div> <br>";
                }
                unset($_SESSION['errores']);
            }
	        
	        $id= (int) $_GET['id'];
	        $sql="Select * from coches where id=$id";
	        $resul=mysqli_query($conexion,$sql);
	        $fila=mysqli_fetch_assoc($resul);

        
        ?>
   
            <div class="row justify-content-center" >
            
                <div class="col-5 bg-light">
                    <h2>Insertar un Coche</h2>
                        <form action="modificar2.php" method="post">             
                                 <div class="form-group ling">
                                    <label for="Marca">Marca</label>
                                    <input type="text" name="marca" id="marca" required value="<?= $fila['marca'] ?>"><br>
                                </div> 
                                <div class="form-group">
                                    <label for="Modelo">Modelo</label>
                                    <input type="text" name="modelo" id="modelo" required value="<?= $fila['modelo'] ?>"><br>
                                </div> 
                                <div class="form-group">
                                    <label for="Precio">Precio</label>
                                    <input type="number" name="precio" id="precio" required value="<?= $fila['precio'] ?>"><br>
                                </div> 
                                <div class="form-group">
                                    <label for="Stock">Stock</label>
                                    <input type="number" name="stock" id="stock" required value="<?= $fila['stock'] ?>"><br>
                                </div> 
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?= $fila['id'] ?>">
                                    <input type="submit" value="Modificar datos">
                                </div>   
                            </form>
                </div>
                <div class="col-6" >
                    <img src="../img/coches.jpg" alt="coche1" class="img-fluid"> 
                 </div>
            </div>                        
     
                      


    <?php
          
          mysqli_close($conexion);
       
          require_once("footer.html");
   
    ?>
         
</body>
</html>