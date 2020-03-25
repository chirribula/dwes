<div class="col-md-7" style="height:1000px;">
    <div class="row">
        <H3 id="titulo" class="w-100 border-bottom pb-4">ALGUNOS DE NUESTROS PRODUCTOS</H3>
    </div>
       

    <div class="row flex-wrap">
        <?php while ($produc = $producto->fetchObject()) : ?>
            <a href="index.php?c=Producto&&a=ver&&id=<?= $produc->id ?>">
                <div class="col-xs-6 col-sm-4 col-md-3 mt-5 text-center mb-4" >  
                    <div class="card col-4 p-3 bg-light border-light mb-3 mt-3" >
                        <?php if ($produc->imagen != NULL): ?>
                            <img class="" height="150" src="uploads/img/<?= $produc->imagen ?>" class="card-img-top w-50 p-3 mx-auto" alt="">
                        <?php else: ?>
                            <img class="" height="150" src="assets/img/Imagen.jpg"/>
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
                </div >
            </a>
        <?php endwhile; ?>
    </div>
</div>