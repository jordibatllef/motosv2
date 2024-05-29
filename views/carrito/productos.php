<?php
session_start();
include 'db.php';  // Archivo donde se establece la conexión a la base de datos

// Consulta para obtener los productos desde la base de datos
$query = "SELECT * FROM articulos";
$result = $conn->query($query);
$productos = [];

while ($row = $result->fetch_assoc()) {
    $productos[] = $row;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <script>
        function añadirAlCarrito(productId) {
            fetch('añadir_carrito.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ id: productId })
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</head>
<body>
    <h1>Productos</h1>
    <div id="productos">
        <?php foreach ($productos as $producto): ?>
            <div class="producto">
                <h2><?php echo $producto['nombre']; ?></h2>
                <p>Precio: $<?php echo $producto['precio']; ?></p>
                <button onclick="añadirAlCarrito(<?php echo $producto['id']; ?>)">Añadir al carrito</button>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="cesta.php">Ir al carrito</a>
</body>
</html>
