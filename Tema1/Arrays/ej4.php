<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ej 4</title>
</head>
<body>

    <?php
        
        $juegos[0]=["Accion","Aventura","Deporte"];
        $juegos[1]=["GTA 5","Assasin Creed","FIFA"];
        $juegos[2]=["Call Of duty","Tomb Raider","PES"];
        $juegos[3]=["PUGB","Last of us","Moto G"];
    ?>
        <table style="border:1px solid black;">
            
            <?php
                foreach($juegos as $pos){
                    echo "<tr style='border:1px solid black;'>";
                    foreach($pos as $valor){
                        echo"<td style='border:1px solid black;'>"; 
                        echo $valor;
                    }
                    echo"</td>";
                }

            
            ?>
      



        </table>
       

        
    
    
</body>
</html>