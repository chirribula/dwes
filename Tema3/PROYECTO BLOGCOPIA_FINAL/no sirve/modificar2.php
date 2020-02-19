<?php
        session_start();   //inico sesión
        require_once("conecta.php");


        $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($conexion, trim ($_POST['titulo'])) : false;
        $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, trim ($_POST['descripcion'])) : false;
        $categoria_id = (int)
        $id = (int)$_POST['id'];
        $errores=array();


        if(empty($titulo)){
            $errores['titulo']="El campo titulo está vacío";
        }
        if(empty($descripcion)){
            $errores['descripcion']="El campo descripcion está vacío";
        }
       
             
        if(count($errores)==0){ 
        
            $sql="UPDATE entradas SET titulo='$titulo',descripcion='$descripcion',fecha=curdate() WHERE id=$id";
            $update=mysqli_query($conexion,$sql);
            if ($update) {
                header("location:index.php");
                echo "Datos insertados correctamente";

            }else {
                echo "Error : " . mysqli_error($conexion);
            }
        }else {
           
            header("location:index.php");
        }
        mysqli_close($conexion);
        require_once "footer.html";
    ?>