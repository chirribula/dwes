<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulario caja fuerte</title>
</head>
<body>
        <?php 
            echo "<form action='ej3.php' method='post'> 
                    <input type='text' name='num'> 
                    <input type='hidden' name='oportunidades' value='$oportunidades '> 
                    <input type='hidden' name='suma' value='$suma '> 
                    <input type='submit' value='Continuar'> 
                </form> 

                <p>No se acabará hasta que metas un número negativo
                </p>"
         ?>
    
</body>
</html>