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
                        echo "La posicion ".$pos." contiene ".$numeros[$i]."<br>";

                    }
                }
          }

        function voltea($numeros){  //tambibén con array_reverse($numeros) 
            $y=0;
            for($i=9  ; $i>=0 ; $i--){
                $array2[$y]=$numeros[$i];
                $y++;              
            }
            echo"El array al revés es: <br>";
            for($i=0;$i<=count($array2)-1;$i++){
                echo $array2[$i]." ";
            }
            echo"<br> Otra forma, con reverse: <br>";
            print_r(array_reverse($numeros));
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
