<?php
session_start();
$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['id'], $data['accion'])) {
    echo json_encode(['message' => 'Datos inválidos']);
    exit;
}

$idProducto = $data['id'];
$accion = $data['accion'];

if (!isset($_SESSION['carrito'][$idProducto])) {
    echo json_encode(['message' => 'Producto no encontrado en el carrito']);
    exit;
}

if ($accion === 'incrementar') {
    $_SESSION['carrito'][$idProducto]++;
} elseif ($accion === 'decrementar') {
    $_SESSION['carrito'][$idProducto]--;
    if ($_SESSION['carrito'][$idProducto] <= 0) {
        unset($_SESSION['carrito'][$idProducto]);
    }
}

include 'db.php';  // Archivo donde se establece la conexión a la base de datos

$productos = [];
if (!empty($_SESSION['carrito'])) {
    $ids = implode(',', array_keys($_SESSION['carrito']));
    $query = "SELECT * FROM articulos WHERE id IN ($ids)";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $productos[$row['id']] = $row;
    }
}

$total = 0;
foreach ($_SESSION['carrito'] as $id => $cantidad) {
    $total += $productos[$id]['precio'] * $cantidad;
}

echo json_encode(['total' => $total]);
?>
