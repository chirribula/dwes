<?php
        session_start();   //inico sesión
        require_once("conecta.php");
        $id_usuario = $_SESSION['id_usuario'];
      
        if(isset($_GET['borrarId'])){

            $id= $_GET['borrarId'];
            var_dump($id);
    
            $sql="DELETE FROM entradas WHERE id=$id AND usuario_id=$id_usuario ";
            $insert=mysqli_query($conexion,$sql);
            if ($insert) {
                header("location:index.php");
                echo "Datos eliminados correctamente";

            }
            else {
                echo "Error : " . mysqli_error($conexion);
            }
        }else{
            header("location:index.php");
        }
       
        mysqli_close($conexion);
        require_once "footer.html";
    ?>