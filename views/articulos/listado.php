
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
                                <a><?= $articulo->getPrecio() ?></a>
                                <a href="#" class="btn btn-primary"> Añadir al carrito</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
         </div>