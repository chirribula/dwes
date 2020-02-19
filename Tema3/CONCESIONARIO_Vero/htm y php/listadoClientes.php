<!DOCTYPE html>
<html lang="es">
<head>
    <title> LISTADO DE CLIENTES </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    
</head>
<body>
    <?php
            session_start();   //inico sesión
            echo "Bienvenido  ".$_SESSION['usuario'];
            require_once("header.html");
            require_once("conecta.php");
            

            $sql= "SELECT c.nombre, c.id FROM clientes c,encargos e,coches co where c.id=e.cliente_id and e.coche_id=co.id";
            $resultado=mysqli_query($conexion,$sql);
            if(mysqli_num_rows($resultado)>0){ 
          
    ?>

        <div class="row justify-content-center" >
                       
                    <div  class="col-5  bg-light">
                        <h2>Clientes</h2>
                            <form id=cliente action="cochesVendidos.php" method="post">             
                                    <div  class="form-group ling">
                                        <label for="cliente">Clientes</label>
                                        <select name="cliente" id="cliente">
                                        <?php
                                             while($fila=mysqli_fetch_assoc($resultado)) {
                                            ?>
                                            <option  value="<?= $fila['id'] ?>"><?= $fila['nombre'] ?></option>
                                           
                                             <?php
                                             } 
                                            }else{
                                                 echo("No hay clientes");
                                             } 
                                             ?>
                                        </select>
                                            </div>
                                        <br>
                                        <div class="form-group">                                          
                                             <input type="submit" value="Mostrar clientes">
                                             <input type="hidden" name="id">
                                        </div>   
                                     </div> 
                             </form>       
                                            
                                  
                     </div>
        </div>                               
   
       
  
       
    <?php
        mysqli_close($conexion);   
        require_once("footer.html");
    ?>

</body>
</html>