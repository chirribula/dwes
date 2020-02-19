<?php    
            session_start();   //inico sesión
            require_once("conecta.php");
          
            $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, trim ($_POST['nombre'])) : false;
            $errores=array();


            if(empty($nombre)){
                $errores['nombre']="El nombre de la categoría está vacío";
            }
               var_dump($nombre);
               var_dump($errores);
                 
            if(count($errores)==0){ 
                          
                $sql="INSERT INTO categorias(nombre) VALUES ('$nombre')";
                $insert=mysqli_query($conexion,$sql);

                if($insert){
                    echo"Categoría añadida correctamente";
    
                 
                    header("location:index.php");             
                }
                else{
                    echo"Error: ".mysqli_error($conexion);
                }

                mysqli_close($conexion);                  
            }

            else{
                $_SESSION["errores"]=$errores;
                header("location:crearCategoria.php");
            }  
          
        ?>
        