<?php
        session_start();   
        #require_once("conecta.php"); lo tengo en la cabecera
 
        $buscar = isset($_POST['buscar']) ? mysqli_real_escape_string($conexion, trim ($_POST['buscar'])) : false;        
        $errores = array();

        
        if (empty($buscar)) {
            $errores['buscar']="El campo buscar esta vacio";
        }

        if (count($errores)==0) {
            $sql="SELECT * FROM entradas WHERE titulo like '%$buscar%'";
            $consulta=mysqli_query($conexion,$sql);
            
            $fila=mysqli_fetch_assoc($consulta); 
            $num=0;
            if(mysqli_num_rows($fila)>0){
                 $_SESSION['titulo$num']=$fila['titulo']; 
                 $num++;   
            }else{
                $_SESSION['titulo']=" ";
            }       
         
            if ($consulta) {
                header("location:index.php");

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