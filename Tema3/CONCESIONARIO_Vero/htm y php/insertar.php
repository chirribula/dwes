<!DOCTYPE html>
<html lang="es">
<head>
<title> INSERTAR </title>
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
           echo "Bienvenido  ".$_SESSION['usuario'];
                                        //no vuelva a mostrar los mismos errores
           require_once("header.html");
                 
        ?>
        
        <div class="container">
            <h2>Insertar un Coche</h2>
                <div class="form-group">
                    <form action="insertar2.php" method="post">
                        <label for="Marca">Marca</label>
                        <br>
                        <input type="text" name="Marca" required>
                        <br>
                        <label for="Modelo">Modelo</label>
                        <br>
                        <input type="text" name="Modelo" required>
                        <br>
                        <label for="Precio">Precio</label>
                        <br>
                        <input type="number" name="Precio" required>
                        <br>
                        <label for="Stock">Stock</label>
                        <br>
                        <input type="number" name="Stock" required>
                        <br>
                        <input type="submit" value="Enviar" name="Enviar">
                     </div>
                </form>
             </div>

    <?php
        if(isset($_SESSION['errores'])){
            foreach ($_SESSION['errores'] as $value) {                                         
                echo "<div>* $value </div> <br>";       //si tiene errores los muestras 
            }
            unset($_SESSION['errores']);                //pone la variable session errores vacía, para que
           }               
          require_once("footer.html");
     ?>
         
</body>
</html>