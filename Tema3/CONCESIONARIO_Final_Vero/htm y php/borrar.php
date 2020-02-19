<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Borrar2</title>
</head>
<body>
    
 
 <?php    
            session_start();   //inico sesión
            require_once("conecta.php");

            $id = (int)$_GET['borrarId'];
            $errores=array();

            

            if(count($errores)==0){            
                $sql="DELETE FROM coches WHERE id=$id";
                $delete=mysqli_query($conexion,$sql);

                if($delete){
                    echo"Coche borrado";
                    header("Location: listar.php");             
                }
                else{
                    echo"Error: ".mysqli_error($conexion);
                }                              
            }

            else{
                header("location:borrar.php");
                mysqli_close($conexion); 
            }  
             
          
        ?>
        


    </body>
    </html>