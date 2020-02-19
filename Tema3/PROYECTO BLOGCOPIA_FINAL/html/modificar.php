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
    <title>Modificar Entradas</title>
     
 </head>
</head>
<body>
    <?php
        session_start();
        require_once("header.php");
        require_once("conecta.php");

        $id = (int)$_GET['modificarId'] ;
        $id_usuario=$_SESSION['id_usuario'];  
        $sql="SELECT * FROM entradas WHERE id='$id'";
        $resul=mysqli_query($conexion,$sql);
        $fila=mysqli_fetch_assoc($resul);      
      
                          
    ?>

    <div id="contenedor">       
    <div id="contenido">
            <div id="titulos">
                <span class="titulo">MODIFICAR ENTRADAS</span>
            </div>
            <div id="entradas">

            <?php
                if($id_usuario == $fila['usuario_id'] ){
            ?>       
                

                <form action="crearEntrada2.php?entrada_id=<?=$id?>" method='post'>
                    <div class="form-group">
                        <label for="titulo">Titulo</label><br>
                        <input type="text" name="titulo" class="entrada" value="<?=$fila['titulo']?>"><br>
                    </div>
                    <div class="form-group">   
                        <label for="desc">Descripcion</label><br>
                        <input type="text" name="descripcion" value="<?=$fila['descripcion']?>" class="entrada" ><br>
                     </div>

                     <div class="form-group">    
                        <label for="cat">Categoría</label><br>
                        <select name="categoria" id="categoria">

                 <?php
                        $sql="SELECT * FROM categorias";
                        $result = mysqli_query($conexion,$sql);
                         if(mysqli_num_rows($result)>0){
                          while($fila = mysqli_fetch_assoc($result)){  
                ?>
                            <option value="<?=$fila['id']?>"><?=$fila['nombre']?></option>                     
               <?php 
                            }
                        }
                ?>                                          
                        </select>
                    </div>
                    <br><br>
                    <div class="form-group">
                         <input type="hidden" value="idEntrada" name="<?=$fila['id']?>">
                         <input type="submit" value="modificar" name="modificar" class="btn btn-danger">
                    </div>
                </form>

                <?php

                }else{
                    echo"No puede modificar una entrada que no es suya";
                }

                ?> 
            </div>
       </div>
           
    <?php
             
        require_once("aside.php");
    ?>

    </div> <!--CONTENEDOR--> 

        <?php
    
      if(isset($_SESSION['errores'])){
            foreach ($_SESSION['errores'] as $value) {                                         
                echo "<div>* $value </div> <br>";
            }
        unset($_SESSION['errores']);
        }
        
        mysqli_close($conexion);   
        require_once("footer.php");
   
    ?>
 
    
</body>
</html>