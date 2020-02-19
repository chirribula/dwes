 <div id="aside">  
    <div id="usuario">
        <span >
            <?php 
                if(isset($_SESSION['usuario'])){
                    echo"Bienvenido ".$_SESSION['usuario'];
                
            ?>
        </span>
    </div>
    <div class="asideArriba">

        <div class="btn-group-vertical">
            <a href="crearEntrada.php"<button type="button" class="btn btn-dark">Crear entrada</button></a>
            <a href="crearCategoria.php"<button type="button" class="btn btn-dark">Crear categoria</button></a>
            <a href="misDatos.php"<button type="button" class="btn btn-dark">Mis datos</button></a>
            <a href="cerrarSesion.php"<button type="button" class="btn btn-dark">Cerrar sesión</button></a>
        </div>
      
    </div>       
    <?php
        }else{
    ?>
            <div class="asideArriba" id="identificate" >
                <span>IDENTIFÍCATE</span>
                    <form action="loguearte.php" method="post" >             
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" id="email" required ><br>
                        </div> 
                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input type="password" name="pass" id="pass" required ><br>
                        </div> 
                    
                        <div class="form-group">
                            <input type="submit" value="Entrar" class="btn btn-danger">
                        </div>   
                    </form>
            </div> <!--asudeArriba--> 

            <div class="asideAbajo" id="registro">    
                <span>REGISTRATE</span>
                <br>

                <?php
                    if(isset($_SESSION['errores'])){
                        foreach ($_SESSION['errores'] as $value) {                                         
                            echo "<span class='error'>* $value </span> <br>";
                        }
                    unset($_SESSION['errores']);
                    }


                ?>
                    <form action="registrarte.php" method="post">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" required ><br>
                        </div>
                        <div class="form-group ">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" id="apellidos" required ><br>
                        </div>
                        <div class="form-group ">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" id="email" required ><br>
                        </div> 
                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input type="password" name="pass" id="pass" required ><br>
                        </div>                                                            
                        <div class="form-group">
                            <input type="submit" value="Crear usuario" class="btn btn-danger">
                        </div>   
                    </form>
            </div>  <!--FORMULARIO REGISTRO-->                 
    <?php
    }
    ?>  
</div>    