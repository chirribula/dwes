<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ej2</title>
</head>
<body>
    
        <?php 
            function esPrimo($n) { 
                $esPrimo = true; 
                for ($i = 2; $i < $n; $i++) { 
                    if ($n % $i == 0) { 
                        $esPrimo = false; 
                    } 
            } // El 0 y el 1 no se consideran primos 
           
            if (($n == 0) || ($n == 1)) { 
                $esPrimo = false; 
                } 
                
            return $esPrimo; 
            } 
        ?>
</body>
</html>