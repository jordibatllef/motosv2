<?php
session_start();
$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['id'])) {
    echo json_encode(['message' => 'Producto no encontrado']);
    exit;
}

$idProducto = $data['id'];

if (!isset($_SESSION['carrito'][$idProducto])) {
    $_SESSION['carrito'][$idProducto] = 0;
}

$_SESSION['carrito'][$idProducto]++;

echo json_encode(['message' => 'Producto añadido al carrito']);
?>
