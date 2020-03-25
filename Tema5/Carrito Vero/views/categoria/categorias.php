<div class="col-md-7">
    <div class="row">
        <H3 id="titulo" class="w-100 border-bottom pb-3">GESTIONAR CATEGORÍAS</H3><hr>
        <div class="col mt-5 mb-5">
         <a href="index.php?c=Categoria&&a=crear" class="btn btn-warning ">Crear categoría</a><br><br><br>
        </div>
    </div>

    <div class="row mt-5">
        <table class="table text-center mt-5" >
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">NOMBRE</th>
            </tr>
            <?PHP while ($cat = $categorias->fetchObject()): ?>
                <tr>
                    <td><?= $cat->id; ?></td>
                    <td><?= $cat->nombre; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</div>