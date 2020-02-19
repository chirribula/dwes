<?php

        $nombre=$_GET['nombre'];
        $ape=$_GET['ape'];
        $dire=$_GET['dire'];
        $edad=(int)$_GET['edad'];
        $movil=$_GET['movil'];

        echo "<span style='color:red'>Nombre: </span> $nombre <br/>";
        echo "<span style='color:red'>Apellidos: </span> $ape <br/>";
        echo "<span style='color:red'>Dirección: </span> $dire <br/>";
        echo "<span style='color:red'>Edad: </span> $edad <br/>";
        echo "<span style='color:red'>Teléfono: </span> $movil <br/>";

 ?>  
    