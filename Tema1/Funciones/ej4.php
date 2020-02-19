<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ej 4</title>
</head>
<body>

    <?php
          require_once('potencia.php');
       
          if(isset($_POST['base']) && isset($_POST['exp'])){ 
            $base=(int)$_POST['base'];
            $exp=(int)$_POST['exp'];

            $resultado=potencia($base,$exp);
            echo"El resultado es $resultado";
            }
          else{
     ?>

            <form action="ej4.php" method="post">
              <label for="base">Introduce la base</label><br>
              <input type="number" name="base"><br>
              <label for="base">Introduce el exponente</label><br>
              <input type="number" name="exp"><br>
              <input type="submit" value="Aceptar"> 
            </form>


    <?php       
          }

    ?>
    
    
</body>
</html>