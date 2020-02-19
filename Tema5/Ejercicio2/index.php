<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="assets/css/estilo.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div id="container">
    <?php
    session_start();
    require_once 'models/PizzeriaDB.php';
    require_once 'helpers/utils.php';   //carga los controladores automaticamente
    require_once 'controllers/OfertaController.php';
    


    if(!isset($_GET['c']) || !isset($_GET['a'])){
        $controlador = new OfertaController();
        $controlador -> index();
    }
    else{
        $nombre_controlador = $_GET['c'].'Controller';
        if(class_exists($nombre_controlador)){
            $controlador = new $nombre_controlador();
            if(method_exists($controlador, $_GET['a'])){
                $action = $_GET['a'];
                $controlador->$action();
            }
            else{
                echo "La pagina que buscas no existe";
            }
        
        }else{
            echo "La pagina que buscas no existe";
        }
    }
    ?>
    </div>
</body>
</html>