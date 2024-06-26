<!DOCTYPE html>
<html lang="en">
<head>
  <title>MOTOS JB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/estilo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>

<?php include_once 'views/nav.php'; ?>
<?php include_once 'views/header.php'; ?>


<div class="text-center">
    <hr>
    <h2>PRODUCTOS</h2>
    <hr>
</div>


<div class="container">
    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-4">
        <?php foreach ($listaarticulos as $articulo) { ?>
        <div class="col">
            <div class="card h-100">
                <img class="card-img-top fixed-image-size" src="img/<?= $articulo->getImg() ?>" alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <div class="mb-auto">
                    <h5 class="text-dark text-uppercase">Nombre:</h5>
                    <p class="card-title text-dark"><?= $articulo->getNombre() ?></p>
                    </div>
                    <div class="mb-auto" >
                    <h5 class="text-dark text-uppercase">Descripción:</h5>
                    <p class="card-text text-dark"><?= $articulo->getDescripcion() ?></p>
                    </div>
                    <div class="mb-auto">
                    <h5 class="text-dark text-uppercase">Precio:</h5>
                    <p class="card-text text-dark"><?= $articulo->getPrecio() ?> €</p>
                    </div>
                    <div class="mb-auto">
                    <!-- Botón de ver producto -->
                    <button class="btn btn-outline-success btn-outline-dark" type="button" onclick="location.href='?controller=Articulo&action=listProductoxId&id=<?= $articulo->getIdProductos() ?>'">Ver producto</button>
                    </div>
                    <pre></pre>
                    <!-- Botón añadir al carrito -->
                    <div class="mb-auto">
                        <form method="post" action="?controller=Pedido&action=addCarrito">
                            <h5 class="text-dark text-uppercase">Cantidad:</h5>
                            <input type="number" name="cantidad" value="1" min="1" max="10">
                            <input type="hidden" name="idProducto" value="<?= $articulo->getIdProductos() ?>">
                            <?php if ($articulo->getStock() == 0) {
                                echo '<p class="text-dark">Artículo no disponible</p>';
                            } ?>
                            <pre></pre>
                            <button class="btn btn-outline-success btn-outline-dark" type="submit" name="accion" value="anadir" <?php if ($articulo->getStock() == 0) echo 'disabled'; ?>>Añadir al carrito</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


<?php include_once 'views/footer.php'; ?>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    //carrusel
    $('.carousel').carousel();
</script>

</body>
</html>
