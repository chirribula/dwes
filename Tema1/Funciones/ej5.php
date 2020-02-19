<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ej 5</title>
</head>
<body>

    <?php
          require_once('digitos.php');
       
          if(isset($_POST['numero'])){ 
            $numero=$_POST['numero'];

            $resultado=digitos($numero);
            echo"El número tiene $resultado dígitos" ;
            }
          else{
     ?>

            <form action="ej5.php" method="post">
              <label for="numero">Introduce el numero</label><br>
              <input type="text" name="numero"><br>
              <input type="submit" value="Contar"> 
            </form>


    <?php       
          }

    ?>
    
    
</body>
</html>