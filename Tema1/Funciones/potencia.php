<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ej4funcion</title>
</head>
<body>

    <?php
        function potencia($base,$exp){
            $resultado=0;
            while($exp>1){
                $resultado+=$base*$base;
                $exp--;
            }
            return $resultado;
        }
    ?>
    
</body>
</html>