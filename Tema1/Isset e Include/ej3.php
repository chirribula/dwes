<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ej3</title>
</head>
<body>

  

       <?php
       
            if(isset($_POST['num']) && isset($_POST['oportunidades']) && isset($_POST['suma'])){  
                $num = (int)$_POST['num']; 
                $oportunidades = (int)$_POST['oportunidades']; 
                $suma = (int)$_POST['suma']; 

           
                if($num>=0){
                    $suma+=$num;
                    $oportunidades++;
                    require_once('formularioEj3.php') ;
                }
                
                else{
                   $media=$suma/$oportunidades;
                   echo "<h1>La media de números es $media </h1>";
                }           
            
            }
            else{ 
                $num=0;
                $oportunidades=0;
                $suma=0;
                require_once('formularioEj3.php') ;
                      
            }


          
               
            

       ?> 







    
</body>
</html>