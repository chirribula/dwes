<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ej 3</title>
</head>
<body>

    <?php
        
        $array[0]="Palabra";
        $array[1]=1;
        $array[2]=True;

            foreach($array as $i => $y){
                if(is_string($array[$i])){
                    echo  $array[$i]." Es string<br>";
                }elseif(is_int($array[$i])){
                    echo  $array[$i]." Es número<br>";
                }elseif(is_bool($array[$i])){
                    echo $array[$i]." Es booleano <br>";
                }
               
        }

        
    ?>
    
</body>
</html>