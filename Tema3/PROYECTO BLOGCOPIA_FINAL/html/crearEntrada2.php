<?php    
            session_start();   //inico sesión
            require_once("conecta.php");
          
            $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($conexion, trim ($_POST['titulo'])) : false;
            $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, trim ($_POST['descripcion'])) : false;
            $categoria_id=(int)$_POST['categoria'];
            $errores=array();
       
            $usuario_id=$_SESSION['id_usuario'];
                           

            if(empty($titulo)){
                $errores['titulo']="El campo titulo está vacío";
            }
            if(empty($descripcion)){
                $errores['descripcion']="El campo descripcion está vacío";
            }
           
                 
            if(count($errores)==0){ 

                if(isset($_GET['entrada_id'])){
                    $id_entrada=(int)$_GET['entrada_id'];

                    $sqlUpdate="UPDATE entradas SET usuario_id=$usuario_id, categoria_id=$categoria_id, titulo='$titulo', descripcion='$descripcion', fecha=curdate() WHERE id=$id_entrada AND usuario_id=$usuario_id";
                    $update=mysqli_query($conexion,$sqlUpdate);

                    if($update){
                        echo"Se ha actualizado correctamente";
        
                        var_dump($update);
                        header("location:index.php");             
                    }
                    else{
                        echo"Error: ".mysqli_error($conexion);
                    }

                    mysqli_close($conexion); 
                }
                 
                else{

                    
                    $sqlInsert="INSERT INTO entradas(usuario_id, categoria_id, titulo, descripcion, fecha) VALUES ($usuario_id,$categoria_id,'$titulo','$descripcion',curdate())";
                    var_dump( $sqlInsert);
                    
                    $insert=mysqli_query($conexion,$sqlInsert);

                    if($insert){
                        echo"Entrada añadido correctamente";
        
                        var_dump($insert);
                        header("location:index.php");             
                    }
                    else{
                        echo"Error: ".mysqli_error($conexion);
                    }

                    mysqli_close($conexion);    
                }              
            }

            else{
                $_SESSION["errores"]=$errores;
                header("location:crearEntrada.php");
            }  
          
        ?>
        