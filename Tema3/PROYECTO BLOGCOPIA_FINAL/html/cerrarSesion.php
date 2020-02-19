<?php
    session_start();

     require_once("conecta.php");
 

    if(isset($_SESSION['usuario'])){
        session_destroy();
        header("location:index.php");
    }

    mysqli_close($conexion); 

?>