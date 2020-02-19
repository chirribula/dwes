<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ej6</title>
</head>
<body>

        <?php
            $diccionario['mesa']="table";
            $diccionario['ventana']="window";
            $diccionario['libro']="book";
            $diccionario['colegio']="school";
            $diccionario['silla']="chair";
            $diccionario['hombre']="man";
            $diccionario['mujer']="woman";
            $diccionario['profesor']="teacher";
            $diccionario['niño']="kid";
            $diccionario['hola']="hello";
            $diccionario['adios']="bye";

            $palabras=['mesa','ventana','libro','colegio','silla', 'hombre', 'mujer', 'profesor', 'niño','hola', 'adios'];
          
            if(isset($_POST['palabra'])){
                $palabra=$_POST['palabra'];
                if(in_array($palabra,$palabras)){  
                    foreach($diccionario as $elemento => $definicion){
                        if($elemento==$palabra){
                            echo $definicion;
                        }
                    }
                 }
                 else{
                     echo"La palabra no está en el dicionario";
                 }                
            }else{
                $palabra="";
            }

        ?>

    
</body>
</html>