<div class="col-md-7">
    <div class="row">
        <H3 id="titulo" class="w-100 border-bottom pb-3">Algunos de nuestros productos</H3>
    </div>
       

    <div class="row mt-5">
        <?php while ($produc = $productos->fetchObject()) : ?>
                <div class="col-xs-6 col-sm-4 col-md-3 mt-3 text-center" >  
                    <div class="card col-4 p-3 bg-light border-light" >
                        <?php if ($produc->imagen != NULL): ?>
                            <img class="" height="150" src="uploads/img/<?= $produc->imagen ?>" class="card-img-top w-50 p-3 mx-auto" alt="">
                        <?php else: ?>
                            <img class="" height="150" src="uploads/img/camiseta.jpg"/>
                        <?php endif; ?>
                        <div class="card-body text-decoration-none">
                            <h4 class="card-title  mb-0 text-success"><?= $produc->nombre ?></h4>
                            <p class="card-text mb-0 text-dark"><?= $produc->precio ?> €</p>
                            <p class="card-text  text-dark font-weight-bold"> <?= $produc->stock ?> Unid disponibles</p>
                            <?php $descripcion = $produc->descripcion ?>
                            <p class="card-text  text-dark"><?= substr($descripcion, 0, 60) ?>...</p>
                            <a href="#" class="btn btn-success">Agregar a carrito</a>
                        </div>           
                    </div>               
                </div>
        <?php endwhile; ?>
    </div>
</div>