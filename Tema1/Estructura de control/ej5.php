<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <!--Ejercicio 5: Introduce un número (como máximo 4 cifras). 
    Muestra por pantalla la primera cifra, la última y di si es par o impar. 
    Nota: Formulario utiliza min y max.-->


        <?php

            $num=(int)$_POST['num'];
            
            $lontigud=strlen($num);
            
            if($num%2==0){
                $par="si";
            }else{
                $par="no";
            }
            $cadena="";

            for($i=0;$i<$longitud;$i++){
                if($i==0 ){
                    $cadena+=$num%10 + " ";
                }
                if($i== $longitud-1){
                    $cadena+=$num%10 + " ";
                }
                $num=$num%10;
            }
            
            echo "Los número son  $cadena  y el número  $par  es par";
 
    
    ?>


</body>
</html>
