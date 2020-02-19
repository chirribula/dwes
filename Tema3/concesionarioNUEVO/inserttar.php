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
    <link rel="stylesheet" href="">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        require_once "header.html";
    ?>
        <div class="container">
            <h2>Insertar un Coche</h2>
            <form action="insertar.php" method="post">
                    <div class="form-group">
                        <label for="Marca">Marca</label>
                        <input type="text" name="marca" id="marca"><br>
                        <label for="Modelo">Modelo</label>
                        <input type="text" name="modelo" id="modelo"><br>
                        <label for="Precio">Precio</label>
                        <input type="number" name="precio" id="precio"><br>
                        <label for="Stock">Stock</label>
                        <input type="number" name="stock" id="stock"><br>
                        <input type="submit" value="Enviar datos" class="btn btn-primary">
                    </div>
        
            </form>
        </div>

    <?php
        require_once "footer.html";
    ?>
</body>
</html>