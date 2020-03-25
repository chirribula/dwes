 <aside class="col-md-2" style="margin-right:1%;">   
   
    <div class="row">

        <h4>MI CARRITO</h4><br>
        
       <a href="index.php" class="btn btn-warning btn-lg btn-block">Productos</a>
         <a href="#" class="btn btn-info btn-lg btn-block">Total</a>
         <a href="#" class="btn btn-primary btn-lg btn-block">Ver carrito</a>
        
      <br><br>
    </div>       

    <?php 
       if(!isset($_SESSION['user']) && !isset($_SESSION['admin']) ){ 

    ?>
        <div class="row">
            <h4>ENTRAR EN LA WEB</h4><br>

            <form action="index.php?c=Usuario&&a=IniciarSesion" method="POST" enctype="multipart/form-data" class="row d-flex justify-content-around">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="email" name="email" required>
                </div>
                <br>
            
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" value="password" name="password" required>
                </div>

            <?php

            if(isset($_SESSION['loguearse'])){
                ?>                                              
            <p style="color:red;">*<?= $_SESSION['loguearse']?></p> <br>
                
            <?php
                unset($_SESSION['loguearse']);
            }

            ?>

                <br>
                <input class="btn btn-warning" type="submit" name="submit" value="Iniciar Sesión">
            </form>
  
        
        </div>


       <?php 
       }else{

            if(isset($_SESSION['user'])){     
                $nombre= $_SESSION['user']->nombre;       
        ?>
            <div class="row"  >
                    <span style="font-size:20px;">Bienvenido <?=$nombre?></span><br><br><br>
                             
<?php
            }
            if($_SESSION['admin']){   
                
            ?>  
             
                  
                <a href="index.php?c=Categoria&&a=index" class="btn btn-info btn-lg btn-block " >Gestionar categorías    </a>       
               <a href="index.php?c=Producto&&a=gestionar" class="btn btn-success btn-lg btn-block" >Gestionar Productos     </a>       
               <a href="#" class="btn btn-primary btn-lg btn-block" >Gestionar pedidos    </a>      
<?php
            }
    ?>

                <a href="#" class="btn btn-info btn-lg btn-block">Mis pedidos</a>
                <a href="index.php?c=Usuario&&a=cerrarSesion" class="btn btn-warning btn-lg btn-block">Cerrar Sesión</a>
                
            </div>       
        

          
    <?php
            }   
     
       ?>
    
</aside>    