<img src="img/dakar.jpg" alt="Dakar Image" style="width: 100%; height: auto; max-width: 100%;">

<div class='container'>   
<a href="?controller=Articulo&action=edit">Crear Articulo</a>
<a href="?controller=Articulo&action=tienda">tienda</a>



<div class="row g-3">
    <?php
    foreach ($listaarticulos as $articulo) {
    ?>
        <div class="col-4">
            <div class="card p-3">
                <img class="card-img-top" src="img/<?= $articulo->getImg() ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $articulo->getNombre() ?></h5>
                    <p class="card-text"><?= $articulo->getDescripcion() ?></p>
                    <a href="#" class="btn btn-primary"><?= $articulo->getPrecio() ?></a>
                    <a href="?controller=Articulo&action=detail">Info</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
</div>
