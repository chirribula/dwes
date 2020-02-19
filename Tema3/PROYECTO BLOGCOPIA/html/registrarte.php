<?php    
            session_start();   //inico sesión
            require_once("conecta.php");
          
            $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, trim ($_POST['nombre'])) : false;
            $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexion, trim ($_POST['apellidos'])) : false;
            $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion, trim ($_POST['email'])) : false;
            $pass = isset($_POST['pass']) ? mysqli_real_escape_string($conexion, trim ($_POST['pass'])) : false;        
            $errores=array();

            if(empty($nombre)){
                $errores['nombre']="El campo nombre está vacío";
            }
            if(empty($apellidos)){
                $errores['apellidos']="El campo apellidos está vacío";
            }
            if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errores['email']="El campo email no es válido";
            }
            if(empty($pass)){
                $errores['pass']="El campo contraseña está vacío";
            }else{
                $pass=password_hash($pass,PASSWORD_BCRYPT,['COST'=>4]);
            }          

            if(count($errores)==0){ 
                           
                $sql="INSERT INTO `usuarios`( `nombre`, `apellidos`, `email`, `password`, `fecha`) VALUES ('$nombre','$apellidos','$email','$pass',curdate())";
                $insert=mysqli_query($conexion,$sql);

                if($insert){
                    echo"Usuario añadido correctamente";
                    header("location:index.php");             
                }
                else{
                    echo"Error: ".mysqli_error($conexion);
                }

                mysqli_close($conexion);                  
            }

            else{
                $_SESSION["errores"]=$errores;
                header("location:index.php");
            }  
          
        ?>
        