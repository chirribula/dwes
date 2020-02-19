<?php
        session_start();   
        require_once("conecta.php");
 
        $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion, trim ($_POST['email'])) : false;
        $passwd = isset($_POST['pass']) ? mysqli_real_escape_string($conexion, trim ($_POST['pass'])) : false;        
        $errores = array();

        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores['email'] = "El email no es válido";
        }
        if (empty($passwd)) {
            $errores['passwd']="El campo passwd esta vacio";
        }

        if (count($errores)==0) {
            $sql="SELECT * FROM usuarios WHERE email='$email'";
            $pass=mysqli_query($conexion,$sql);
            
            $fila=mysqli_fetch_assoc($pass);           
            $verify = password_verify($passwd,$fila['password']);    //verifica el hash de la contraseña
            
           
            if ($verify) {
                $_SESSION['id_usuario']=$fila['id'];
                $_SESSION['usuario']=$email;
                header("location:index.php");               //cambia la ruta 
            }else {
                $errores['notExict']="El correo no existe";
            }

        }else {
            header("location:index.php");
        }

        mysqli_close($conexion);
    ?>