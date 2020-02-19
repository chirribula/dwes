<!DOCTYPE html>
<html lang="es">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <title>Mis Datos</title>
     
 </head>
</head>
<body>
    <?php
        session_start();
        require_once("header.php");
        require_once("conecta.php");

        $email=$_SESSION['usuario'];
        $sql="SELECT * FROM usuarios WHERE email='$email'";
        $resul=mysqli_query($conexion,$sql);
        $fila=mysqli_fetch_assoc($resul);      
      
    ?>

    <div id="contenedor">       
       <div id="contenido">
            <div id="titulos">
                <span class="titulo">MIS DATOS</span>
            </div>
            <div id="entradas">
               
            <form action="misDatos2.php" method="post">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" value="<?=$fila['nombre']?>" required ><br>
                      
                        </div>
                        <div class="form-group ">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" id="apellidos" value="<?=$fila['apellidos']?>" required ><br>
                        </div>
                        <div class="form-group ">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" id="email" value="<?=$email?>" required ><br>
                            <input type="hidden" name="id" value="<?= $fila['id'] ?>">
                        </div>                                                            
                        <div class="form-group">
                            <input type="submit" value="Modificar datos" class="btn btn-danger">
                        </div>   
                    </form>


               
            </div>
       </div>
           
    <?php
        require_once("aside.php");
    ?>

    </div> <!--CONTENEDOR--> 

       
    
        <?php
        if(isset($_SESSION['errores'])){
            foreach ($_SESSION['errores'] as $value) {                                         
                echo "<span class='error'>* $value </span> <br>";
            }
        unset($_SESSION['errores']);
        }
        
        mysqli_close($conexion);   
        require_once("footer.php");
   
    ?>
 
    
</body>
</html>