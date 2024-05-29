<?php
class PedidoController {
    public function deleteProducto() {
        session_start();
        $idProducto = $_GET['idProducto'];
        if (isset($_SESSION['carrito'][$idProducto])) {
            unset($_SESSION['carrito'][$idProducto]);
        }
        header('Location: cesta.php');
    }

    public function addPedido() {
        session_start();
        include 'db.php';  // Archivo donde se establece la conexión a la base de datos

        if (!isset($_SESSION['user'])) {
            header('Location: ?controller=usuario&action=login');
            exit;
        }

        $idUsuario = $_SESSION['user']['id'];
        $carrito = $_SESSION['carrito'];

        // Insertar el pedido
        $query = "INSERT INTO pedidos (id_usuario, fecha) VALUES ('$idUsuario', NOW())";
        $conn->query($query);
        $idPedido = $conn->insert_id;

        // Insertar los productos del pedido
        foreach ($carrito as $idProducto => $cantidad) {
            $query = "INSERT INTO detalle_pedido (id_pedido, id_articulo, cantidad) VALUES ('$idPedido', '$idProducto', '$cantidad')";
            $conn->query($query);
        }

        // Vaciar el carrito
        unset($_SESSION['carrito']);

        header('Location: ?controller=Pedido&action=pedidoExitoso');
    }

    public function pedidoExitoso() {
        include 'views/pedido_exitoso.php';
    }
}
?>
