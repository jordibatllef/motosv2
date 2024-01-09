<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        nav {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            font-weight: bold;
        }

        section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .product {
            width: 30%;
            margin: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .product img {
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        #order-form {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            align-items: center;
            color: white;
        }

        #order-form label {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Tienda de Productos</h1>
        <nav>
            <a href="#" onclick="loadHome()">Inicio</a>
            <a href="#">Cascos</a>
            <a href="#">Ropa</a>
            <a href="#">Niños</a>
            <a href="#">Contacto</a>
        </nav>

        <!-- Formulario de ordenación -->
        <form id="order-form">
            <label for="order-by">Ordenar por:</label>
            <select id="order-by">
                <option value="precio">Precio</option>
            </select>

            <label for="order-direction">Orden:</label>
            <select id="order-direction">
                <option value="asc">Ascendente</option>
                <option value="desc">Descendente</option>
            </select>
        </form>
    </header>

    <section>
        <?php
            foreach ($listaarticulos as $articulo) {
        ?>
           <h1> <?=$articulo->getNombre() ?></h1>
           <p> <?=$articulo-> getDescripcion() ?></p>
           <p> <?=$articulo->getPrecio() ?></p>
           <img class="card-img-top" src="img/<?= $articulo->getImg() ?>" alt="Card image cap">
            



        <?php    
        }
        ?>
    </section>

    
</body>

</html>


