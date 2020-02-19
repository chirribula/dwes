<?php

        session_start();   //inico sesión
        require_once("conecta.php");
 
        $email = isset($_POST['mail']) ? mysqli_real_escape_string($conexion, trim ($_POST['mail'])) : false;
        $passwd = isset($_POST['pass']) ? mysqli_real_escape_string($conexion, trim ($_POST['pass'])) : false;        
        $errores=array();

        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores['email'] = "El email no es válido";
        }
        if (empty($passwd)) {
            $errores['passwd']="El campo passwd esta vacio";
        }

        if (count($errores)==0) {
            $sql="Select * From usuario Where email='$email'";
            $pass=mysqli_query($conexion,$sql);
            
            $fila=mysqli_fetch_assoc($pass);
            /*
            $verifyPassword = password_verify($passwd,$fila['password']);
            */
           
            if ($fila['password'] == $passwd) {
                $_SESSION['usuario']=$email;
                header("location:listar.php");
            }else {
                $errores['notExict']="El correo no existe";
            }

        }else {
            header("location:index.php");
        }

        mysqli_close($conexion);
    ?>