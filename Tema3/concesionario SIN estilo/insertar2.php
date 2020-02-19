<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar2</title>
</head>
<body>
    

 
 
 <?php    
            require_once("conecta.php");

            $marca = isset($_POST['Marca']) ? mysqli_real_escape_string($conexion, trim ($_POST['Marca'])) : false;
            $modelo = isset($_POST['Modelo']) ? mysqli_real_escape_string($conexion, trim ($_POST['Modelo'])) : false;
            $precio = (int)$_POST['Precio'];
            $stock = (int)$_POST['Stock'];
            $errores=array();

            if(empty($marca)){
                $errores['marca']="El campo marca está vacío";
            }
            if(empty($modelo)){
                $errores['modelo']="El campo modelo está vacío";
            }
            if(empty($precio)){
                $errores['precio']="El campo precio está vacío";
            }
            if(empty($stock)){
                $errores['marca']="El campo stock está vacío";
            }


            if(count($errores)==0){            
                $sql="INSERT INTO `coches`( `modelo`, `marca`, `precio`, `stock`)  VALUES('$marca','$modelo',$precio,$stock)";
                $insert=mysqli_query($conexion,$sql);

                if($insert){
                    echo"Coche añadido";
                    header("location: listar.php");             
                }
                else{
                    echo"Error: ".mysqli_error($conexion);
                }

                mysqli_close($conexion);                  
            }

            else{
                header("location:insertar.php");
            }  
          
        ?>
        


    </body>
    </html>