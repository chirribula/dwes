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

         
            if($nota1>$nota2){
                $max=$nota1;
                if($max>$nota3){
                    if($nota3>$nota2){
                        $med=$nota3;
                        $min=$nota2;            //no terminado
                    }
                    else{

                        $max=$nota3;
                        if()
                        $med=$nota2;
                        $min=$nota3;    
                    }               
                 }

            }else{
                $max=$nota2;
                if($max>$nota3){

                }
            }
           
    
    
    
    ?>


</body>
</html>