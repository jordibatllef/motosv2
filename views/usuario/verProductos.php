<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver productos</title>
    <style>
        /* Estilo para las imágenes de productos en la tabla */
        table img {
          width: 40%;
          height: 40%;
          display: block;
          margin: 0 auto;
        }
    </style>
</head>
<body>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ver productos</h1>
                </div>
                
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?controller=Articulo">Home</a></li>
                        
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">

        <table class="table table-bordered">
            <thead  class="thead-dark">
                <tr>
                   
                    <th>getIdarticulos</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>idcategoria</th>
                    <th>Imagen</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($listaarticulos as $articulo) {
            ?>
                <tr>
                    <td><?= $articulo->getIdarticulos() ?></td>
                    <td><?= $articulo->getNombre() ?></td>
                    <td><?= $articulo->getPrecio() ?></td>
                    <td><?= $articulo->getDescripcion() ?></td>
                    <td><?= $articulo->getimage() ?></td>
                    <td><?= $articulo->getIdcategoria() ?></td>
                    <td><img class="" src="img/<?= $articulo->getImg() ?>" alt="Card image cap"></td>
                    <td>  <a href="?controller=Articulo&action=delete&id=<?= $articulo->getIdarticulos() ?>" class="nav-link">
                            <i class="fa-solid fa-trash"></i>
                                <p>Eliminar productos</p>
                            </a>
                            <a href="?controller=Dashboard&action=editarProducto&id=<?= $articulo->getIdarticulos() ?>" class="nav-link">
                            <i class="fa-solid fa-pencil"></i>
                                <p>Editar productos</p>
                            </a>
                    </td>
                </tr>

            <?php } ?>

            </tbody>
        </table>
    </section>
</div>
    
</body>
</html>