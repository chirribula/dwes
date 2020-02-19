<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
</head>
<body>

    <?php
        require_once('deBinarioaDecimal.php');   //carga la función matemática
     
        if(isset($_POST['num'])){ 
          $num=$_POST['num'];

          $resultado=deBinarioaDecimal($num);
          echo"El número en decimal es $resultado";
          }
        else{
   ?>

          <form action="ejercicio3.php" method="post">
            <label for="num">Introduce el número binario</label><br>
            <input type="text" name="num"><br>
            <input type="submit" value="Aceptar"> 
          </form>


  <?php       
        }

  ?>
    
</body>
</html>