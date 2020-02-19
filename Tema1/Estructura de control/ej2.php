<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

        <?php

            $hora=(int)$_POST['hora'];
            

            if($hora <= 40){  
                $hora=$hora*12;  
                echo "Cobrará $hora euros";
            }
            else{
                $hora=$hora*16;  
                echo "Cobrará $hora euros";
            }
    
    
    
    ?>


</body>
</html>
