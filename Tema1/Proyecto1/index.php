<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ej 1</title>
</head>
<body>

    <?php
        
        for($i=0;$i<10;$i++){
            $numeros[$i]=rand(0,10);
        }

        function mostrar($numeros){
            echo"El array entero: <br>";
            foreach($numeros as $i){
                echo $i." ";
            }
            echo"<br>";
        }
        

         function sinUltimo($numeros){
             echo"El array sin el último: <br>";
            for($i=0;$i<count($numeros)-1;$i++){
                echo $numeros[$i]." ";
            }
             echo"<br>";   
            }
        


        function ordenar($numeros){
            echo"El array ordenado: <br>";
            sort($numeros);
            foreach($numeros as $i){
                echo $i." ";
            }            
            echo"<br>";
        }

        function longitud($numeros){
            echo"La longitud es: ".count($numeros);         
            echo"<br>";
        }

        function mostrarIndice($numeros){
                $pos=rand(0,8);              
                for($i=0;$i<count($numeros)-1;$i++){
                    if($pos==$i){
                        echo "La posicion ".$pos." contiene ".$numeros[$i];

                    }
                }
          }

          function voltea($numeros){  //tambibén con array_reverse($numeros) 
            for($i=count($numeros)-1  ; $i>=0 ; $i--){
                $texto+=$numeros[$i]." ";
                echo"hola";
                }
                echo $texto;
            }
      
        
            


        mostrar($numeros);
        sinUltimo($numeros) ; 
        ordenar($numeros); 
        longitud($numeros); 
        mostrarIndice($numeros);
        voltea($numeros);
        

    ?>
    
</body>
</html>

