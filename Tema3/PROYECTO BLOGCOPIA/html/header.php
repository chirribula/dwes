<?php

        require_once("conecta.php");
?>

        <div  class="row" >

            <div class="col-md-12" id="cabecera">
                <header>
                    <p>468 ESTUDIO</p>
                </header>
            </div>
   
            <div class="col-md-12">
                <nav id="navegador" class="navbar navbar-expand-sm bg-danger navbar-dark">
                    <ul class="navbar-nav">
                        <a class="navbar-brand" >
                            <img src="../img/logoNavegador.png" alt="Logo" style="width:30px;">
                        </a>
                        <li class="nav-item">
                            <a class="nav-link" href=".">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobreMi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>

                        <?php
                            $sql="SELECT * FROM categorias";
                            $result = mysqli_query($conexion,$sql);
                                if(mysqli_num_rows($result)>0){
                                    while($fila = mysqli_fetch_assoc($result)){  
                                     
                        ?>
                                
                        <li class="nav-item">
                            <a class="nav-link" href="categoria.php?categoria_id=<?= $fila['id'] ?>"><?=$fila['nombre']?></a>
                        </li>
                

                        <?php 
                        }}


                        ?>   

                       
                    </ul>
                    <div id="buscar">
                    <form  class="form-inline" method="post" action="index.php">
                            <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="Buscar">
                            <button class="btn btn-dark" type="submit">Buscar</button>
                    </form>
                    </div>
                </nav>
            </div>
        </div> 
