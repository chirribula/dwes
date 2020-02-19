<?php
        session_start();   //inico sesión
        require_once("header.php");
        require_once("conecta.php"); 
 
        $buscar = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, trim ($_POST['nombre'])) : false;
        $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexion, trim ($_POST['apellidos'])) : false;
        $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion, trim ($_POST['email'])) : false;
        $id= (int) $_POST['id'];
        $errores=array();
        
        if (empty($nombre)) {
            $errores['nombre']="El campo nombre esta vacio";
        }
        if (empty($apellidos)) {
            $errores['apellidos']="El campo apellidos esta vacio";
        }
        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores['email'] = "El email no es válido";
        }
       
          
        if (count($errores)==0) {          
            $sql="UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', email='$email'  WHERE id=$id";
            $update=mysqli_query($conexion,$sql);
            if ($update) {
                header("location:index.php");
                echo "Datos actualizados correctamente";

            }else {
                echo "Error : " . mysqli_error($conexion);
            }
        }else {
            $_SESSION["errores"]=$errores;
            header("location:misDatos.php");
        }
        mysqli_close($conexion);
        require_once "footer.php";
    ?>