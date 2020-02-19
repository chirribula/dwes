<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ej2</title>
</head>
<body>

    <!--Ejercicio 2: Realiza el control de acceso a una caja fuerte. 
        La combinación será un número de 4 cifras. El programa nos pedirá 
        la combinación para abrirla. Si no acertamos, se nos mostrará el 
        mensaje “Lo siento, esa no es la combinación” y si acertamos se nos 
        dirá “La caja fuerte se ha abierto satisfactoriamente”. Tendremos 
        cuatro oportunidades para abrir la caja fuerte.-->

       <?php

            $clave=1234;
            
            if(isset($_POST['oportunidades']) && isset($_POST['num'])){ 
                $oportunidades = (int)$_POST['oportunidades']; 
                $num = (int)$_POST['num']; 
            }
            else{ $oportunidades =4; 
                  $num=0;
            }


            if($num==$clave){
                echo "<h1>Has acertado la clave!!!</h1>";
            }
            elseif($oportunidades==0){
                echo "<h1>Se acabaron las oportunidades!!</h1>";
            }
            elseif($num==0){
                echo "<h1>Adivina el número de 4 cifras</h1>";
                require_once('formularioCajaFuerte.php');
            }
            else{
                $oportunidades--;
                
                if($clave>$num){
                    echo "<p>La clave es mayor que tu número</p>";
                }
                else{
                    echo "<p>La clave es menor que tu número</p>";
                }
                require_once('formularioCajaFuerte.php') ;
            }
            

       ?> 







    
</body>
</html>