<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registro Usuario</title>
</head>
<body>
    

 <?php    
            session_start();   //inico sesión
            require_once("conecta.php");
          

            $mail = isset($_POST['mail']) ? mysqli_real_escape_string($conexion, trim ($_POST['mail'])) : false;
            $pass1 = isset($_POST['pass1']) ? mysqli_real_escape_string($conexion, trim ($_POST['pass1'])) : false;
            $pass2 = isset($_POST['pass2']) ? mysqli_real_escape_string($conexion, trim ($_POST['pass2'])) : false;
            $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, trim ($_POST['nombre'])) : false;
            $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexion, trim ($_POST['apellidos'])) : false;
            $edad = (int)$_POST['edad'];
            $direccion = isset($_POST['direccion']) ? mysqli_real_escape_string($conexion, trim ($_POST['direccion'])) : false;
            $errores=array();

            if(empty($mail) || !filter_var($mail,FILTER_VALIDATE_EMAIL)){
                $errores['mail']="El campo mail no es válido";
            }
            if(empty($pass1)){
                $errores['pass1']="El campo contraseña está vacío";
            }
            if(empty($pass2)){
                $errores['pass2']="El campo repita contraseña está vacío";
            }
            if($pass1!=$pass2){
                 $errores['diferente']="Las contraseñas no coinciden"  ; 
            }/*
            else{
                $password_segura=password_hash($pass1,PASSWORD_BCRYPT,['COST'=>4]);
            }*/
            if(empty($nombre)){
                $errores['nombre']="El campo nombre está vacío";
            }
            if(empty($apellidos)){
                $errores['apellidos']="El campo apellidos está vacío";
            }
            if(empty($edad)){
                $errores['edad']="El campo edad está vacío";
            }
            if(empty($direccion)){
                $errores['direccion']="El campo direccion está vacío";
            }


            if(count($errores)==0){            
                $sql="INSERT INTO `usuario`( `email`, `password`, `nombre`, `apellidos`,`edad`,`direccion`)VALUES('$mail','$pass1','$nombre','$apellidos',$edad,'$direccion')";
                $insert=mysqli_query($conexion,$sql);

                if($insert){
                    echo"Usuario añadido correctamente";
                    header("location: index.php");             
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
        


    </body>
    </html>