<!DOCTYPE html>
<html lang="es">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 
     <!-- Course CSS -->
     <link rel="stylesheet" href="../css/estilo.css">
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <title>BLOG TRABAJOS</title>
     
 </head>
</head>
<body>
    <?php
        session_start();
        require_once("header.php");
        require_once("conecta.php");        
         /*
        $sql="SELECT * FROM usuarios";
        $resul=mysqli_query($conexion,$sql);
        $fila=mysqli_fetch_assoc($resul); 
        */

    ?>

    <div id="contenedor">       
       <div id="contenido">
            <div id="titulos">
                <span class="titulo">ULTIMOS TRABAJOS</span>
            </div>
           <div id="entradas">

                <?php
                     $buscar = isset($_POST['buscar']) ? mysqli_real_escape_string($conexion, trim ($_POST['buscar'])) : false;        
                     $errores = array();

                     if(isset($buscar)){ 
                        if (empty($buscar)) {
                            $errores['buscar']="El campo buscar esta vacio";
                        }
                
                        if (count($errores)==0) {
                            $sql="SELECT * FROM entradas WHERE titulo like '%$buscar%'";
                            $consulta=mysqli_query($conexion,$sql);
                            
                            $fila=mysqli_fetch_assoc($consulta); 
                            
                            if(mysqli_num_rows($consulta)>0){
                                while($fila = mysqli_fetch_assoc($consulta)){  ?>
      
                              <span class="trabajo"><?=$fila['titulo']?></span>
                              <p><?=$fila['nombre']?> |  <?=$fila['fecha']?></p>
                              <p><?=$fila['descripcion']?></p>

                              <?php        
                                }     
                            }else{
                              
                            }       
                         
                            
                            }else {
                                $_SESSION["errores"]=$errores;
                                header("location:index.php");
                            }





                    /*
                    if(isset($_SESSION['titulo'])){     //si ha buscado un título
                        while($_SESSION =>){
                        
                               */
                    }else{

                
                      $sql="SELECT e.titulo, e.descripcion, c.nombre,e.fecha FROM entradas e, categorias c WHERE e.categoria_id=c.id";  
                      $result = mysqli_query($conexion,$sql);
  
                      if(mysqli_num_rows($result)>0){
                          while($fila = mysqli_fetch_assoc($result)){  ?>

                        <span class="trabajo"><?=$fila['titulo']?></span>
                        <p><?=$fila['nombre']?> |  <?=$fila['fecha']?></p>
                        <p><?=$fila['descripcion']?></p>
                
                    <?php 
                     }
                         }
                        }
                   
                
                    ?>

           </div>

            
       </div>
      
       
       
    <?php
        require_once("aside.php");
    ?>

    </div> <!--CONTENEDOR--> 

    <?php
        
        mysqli_close($conexion);   
        require_once("footer.php");
   
    ?>
 
    
</body>
</html>