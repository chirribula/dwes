<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>·j5 formulario</title>
</head>
<body>
      <!---No me sale-->
    <?php 
     echo
    
   "<form action='ej5.php' method='get'>
        <label for='num'>Numero: </label>
        <input type='number' name='num' >
        <input type='hidden' name='max'  value='$max'>
        <input type='hidden' name='min'  value='$min'>
        <input type='hidden' name='array'  value='$array'>
        <input type='hidden' name='cont'  value='$cont'>
        <br>
        <br>
        <input type='submit' name='enviar'>
    </form>";
    ?>
</body>
</html>