<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>                  
                <!---No me sale-->
    <?php
 
            if(isset($_GET['num']) && isset($_GET['cont'])>0){
                    $num=$_GET['num'];
                    $max=$_GET['max'];
                    $min=$_GET['min'];
                    $array=$_GET['array'];                 
                    $array[$i]=$num;
                  
                    
                    if($num>$max){
                        $max=$num;
                    }
                   
                    elseif($num<$min){
                        $min=$num;
                    }

                    if($cont==1){
                       echo"El número máximo es".$max. " y el mínimo es ". $min; 
                    }
                    $cont--; 
                    require_once("ej5formulario.php"); 
                                
            }
            else{
                $num=0;               
                $max=-1;
                $min=5000;
                $cont=10;
                $array= [];

               
                
            
            }
        
    ?>

   

</body>
</html>