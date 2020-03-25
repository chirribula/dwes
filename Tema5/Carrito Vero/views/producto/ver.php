<div class="col-md-7 ">
    <div class="row">

        <h3 class="w-100 mb-4 text-center">VER PRODUCTO</h3>
    </div>

    <div class="row">

        <div class="col-md-5" style="margin-right:3%;">
            <?php if ($pro->imagen != NULL): ?>              
                <img  src="uploads/img/<?= $pro->imagen ?>" class="w-100"  width="350" alt="">              
            <?php else: ?>
                <img class="" width="350" src="assets/img/Imagen.jpg" />
            <?php endif; ?>
        </div>     

        <div class="col-md-5 mt-5" style="margin-top:10%;">
            <div class="row ">
                <h5 class="col-12 text-left"><?= $pro->nombre ?></h5>
                <p class="col-12 text-left"><?= $pro->descripcion ?></p>
                <p class="col-12 text-left">Disponibilidad: <?= $pro->stock ?></p>
                <p class="col-12 text-left">€ <?= $pro->precio ?></p>
                <a href="" class="btn btn-success w-50">Comprar</a>
            </div>
        </div>

    </div>
</div>



  