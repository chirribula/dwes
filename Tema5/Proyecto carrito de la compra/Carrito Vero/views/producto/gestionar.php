<div class="col-md-7 ">
    <div class="row">

        <h3 class="w-100 mb-4 text-center">GESTIONAR PRODUCTOS</h3>
        <div class="w-100">
            <a href="index.php?c=Producto&&a=crear" class="btn btn-success">CREAR PRODUCTO</a><br><br>
        </div>

      
        <?php

            if(isset($_SESSION['remove'])){
        ?>                                              
            <p style="color:blue;">*<?= $_SESSION['remove']?></p> <br>
                
       <?php
            unset($_SESSION['remove']);
            }
            if(isset($_SESSION['producto'])){
        ?>  
            <p style="color:blue;">*<?= $_SESSION['producto']?></p> <br> 
                 
        <?php
            unset($_SESSION['producto']);}   
        ?>
        
    </div>  
    <div class="row">
        <div class="w-100 d-flex justify-content-center ">
            <table class="table mt-3 w-75 border text-center">
                <tr class="text-center">
                    <th class="text-center">id</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Stock</th>
                    <th class="text-center">Imagen</th>
                    <th class="text-center">Acciones</th>
                </tr>
                <?php while ($pro = $productos->fetchObject()): ?>
                    <tr>
                        <td><?= $pro->id ?></td>
                        <td><?= $pro->nombre ?></td>
                        <td><?= $pro->precio ?></td>
                        <td><?= $pro->stock ?></td>
                        <?php if ($pro->imagen != NULL): ?>
                            <td><img src="uploads/img/<?=$pro->imagen ?>" width="100px"></td>
                        <?php else: ?>
                            <td><img src="assets/img/Imagen.jpg" width="100px"></td>
                        <?php endif; ?>   
                        <td>
                            <a href="index.php?c=Producto&&a=editarProducto&&id=<?= $pro->id ?>" class="btn btn-success w-100 ">Editar</a>
                            <a href="index.php?c=Producto&&a=eliminarProducto&&id=<?= $pro->id ?>" class="btn btn-danger w-100 mt-1">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</div>