       <div  class="row" >
            <div class="col" id="cabecera">
                <header>
                <p>VERO MODA</p>  
                </header>
                     
            </div>
       </div>
       <div  class="row" >
           
                <nav id="navegador" class="navbar navbar-inverse bg-secondary">
                    <ul class="navbar-nav">                     
                        <li class="nav-item">
                        &nbsp;&nbsp;  <a class="nav-link" href="index.php?c=Producto&&a=index" style="text-decoration:none">INICIO</a>&nbsp;&nbsp;&nbsp;
                        </li>
                        <?php $categoriaMenu = Utils::mostrarCategorias();?>

                        <?php while ($categoria = $categoriaMenu->fetchObject()): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?c=Categoria&&a=ver&&id=<?= $categoria->id ?>" style="text-decoration:none"><?= $categoria->nombre ?></a>  &nbsp;&nbsp; &nbsp;
                                </li>
                        <?php endwhile; ?>        
                    </ul>                   
                </nav>
       </div>



       