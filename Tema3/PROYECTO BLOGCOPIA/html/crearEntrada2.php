<?php    
            session_start();   //inico sesión
            require_once("conecta.php");
          
            $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($conexion, trim ($_POST['titulo'])) : false;
            $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, trim ($_POST['descripcion'])) : false;
            $errores=array();
            $id_entrada=(int)$_GET['entrada_id'];
           var_dump($id_entrada);

            if(isset($_SESSION['usuario'])){
                $email=$_SESSION['usuario'];
                $sql= "SELECT id FROM usuarios WHERE email='$email'";
                $select=mysqli_query($conexion,$sql);
                $fila=mysqli_fetch_assoc($select);
                $usuario_id=$fila['id'];
            }

            if(isset($_POST['categoria'])){
                $categoria_id=$_POST['categoria'];
            }else{
                $errores['categoria']="No existe ninguna categoría";
            }

            if(empty($titulo)){
                $errores['titulo']="El campo titulo está vacío";
            }
            if(empty($descripcion)){
                $errores['descripcion']="El campo descripcion está vacío";
            }
           
                 
            if(count($errores)==0){ 

                if(isset($_GET['entrada_id'])){

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
                header("location:index.php");
            }  
          
        ?>
        