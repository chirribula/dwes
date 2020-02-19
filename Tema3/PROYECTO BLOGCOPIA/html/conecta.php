<?php

    $servidor="localhost";
    $usuario="vero";
    $clave="vero";
    $bd="blog";

    $conexion=mysqli_connect($servidor,$usuario,$clave,$bd);
    if(mysqli_connect_errno()){
        echo "No se ha podido establecer conexion con la base de datos <br>";
        die("Error: ".mysqli_connect_error());
    }
    
    mysqli_query($conexion, "SET NAMES 'utf8'");

?>