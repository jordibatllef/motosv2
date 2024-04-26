

<?php
if (isset($message)) {
    ?>
    <p class='message'><?= $message ?></p>
    <?php
}


if (isset($_SESSION['cesta']) && count($_SESSION['cesta']) > 0) {
    ?>
    <div class='cesta'>
        <h2>Cesta de Compras</h2>

        <?php
        foreach ($_SESSION['cesta'] as $producto) {
            ?>
            <div class='producto'>
                <h3><?= $producto['nombre'] ?></h3>
                <p>Precio: $<?= $producto['precio'] ?></p>
                <p class='eliminar' onclick='eliminarProducto(<?= $producto['id'] ?>)'>Eliminar</p>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
} else {
    ?>
    <p>Su cesta está vacia</p>
    <?php
}


?>
