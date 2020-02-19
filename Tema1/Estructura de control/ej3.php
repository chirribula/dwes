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

            $nota1=(int)$_POST['nota1'];
            $nota2=(int)$_POST['nota2'];
            $nota3=(int)$_POST['nota3'];

            $media=round(($nota1+$nota2+$nota3)/3);

            switch($media){   
                case 0:
                case 1:
                case 2:
                case 3:
                case 4:  
                     echo "Insuficiente";
                     break;
                case 5:
                    echo"Suficiente";
                    break;
                case 6:
                    echo"Bien";
                    break;
                case 7:
                case 8:
                    echo"Notable";
                    break;
                case 9:
                case 10:
                    echo"Sobresaliente";
                    break;
                default:
                    echo"El número introducido no es válido";
                    break;
            }
    
    
    
    ?>


</body>
</html>