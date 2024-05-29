<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver mi cesta</title>
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        /* Estilo para las imágenes en la tabla */
        table img {
          width: 50%;
          height: 50%;
          display: block;
          margin: 0 auto;
        }
    </style>
    <script>
        function actualizarCarrito(productId, accion) {
            fetch('actualizar_carrito.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ id: productId, accion: accion })
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('total').innerText = 'Total: ' + data.total + ' €';
                location.reload();
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</head>
<body>
<?php include_once 'views/nav.php'; ?>
<div class="container px-3 my-5 clearfix">
    <div class="card">
        <div class="card-header">
            <h2>Mi cesta</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered m-0">
                <thead>
                  <tr>
                    <th class="text-center py-3 px-4" style="width: 100px;">Imagen</th>
                    <th class="text-center py-3 px-4" style="width: 100px;">Precio</th>
                    <th class="text-center py-3 px-4" style="width: 100px;">Cantidad</th>
                    <th class="text-center py-3 px-4" style="width: 100px;">Total</th>
                    <th class="text-center py-3 px-4" style="width: 100px;">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $total = 0;                  
                foreach ($articulos_cesta as $lineacarrito){
                    $total += $lineacarrito["articulo"]->getPrecio() * $lineacarrito['cantidad'];
                ?>
                  <tr>
                   <td><img src="img/<?= $lineacarrito['articulo']->getImg() ?>" alt="Card image cap"></td>
                    <td><?= $lineacarrito['articulo']->getPrecio() ?> €</td>
                    <td>
                        <button onclick="actualizarCarrito(<?= $lineacarrito['articulo']->getIdProductos() ?>, 'decrementar')">-</button>
                        <?= $lineacarrito['cantidad'] ?>
                        <button onclick="actualizarCarrito(<?= $lineacarrito['articulo']->getIdProductos() ?>, 'incrementar')">+</button>
                    </td>
                    <td><?= $lineacarrito['articulo']->getPrecio() * $lineacarrito['cantidad'] ?> €</td>
                    <td>
                    <a href="?controller=Pedido&action=deleteProducto&idProducto=<?= $lineacarrito['articulo']->getIdProductos() ?>">
                    <i class="fa-solid fa-trash"></i>
                    <p>Eliminar</p>
                    </a>
                    </td>
                    </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="text-right mt-4">
              <label class="text-muted font-weight-normal m-0">Precio total</label>
              <div class="text-large"><strong id="total"><?= $total ?> €</strong></div>
            </div>
        </div>
        <div class="float-right">
    <?php
      if (isset($_SESSION['user'])) {?>
              <a class="btn btn-dark btn-default md-btn-flat mt-2 mr-3" href="?controller=Articulo">Seguir comprando</a>
              <a class="btn btn-dark btn-primary mt-2" href="?controller=Pedido&action=addPedido">Finalizar compra</a> 
    <?php } else { ?>
              <a class="btn btn-dark btn-default md-btn-flat mt-2 mr-3" href="?controller=usuario&action=login">Registrarse</a>
              <a class="btn btn-dark btn-default md-btn-flat mt-2 mr-3" href="?controller=Articulo">Seguir comprando</a>
    <?php } ?>
        </div>
    </div>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/e8a23d1527.js" crossorigin="anonymous"></script>
</body>
</html>
