<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_valido = 'usuario';
    $contrasena_valida = 'contrasena';

    if ($_POST['usuario'] == $usuario_valido && $_POST['contrasena'] == $contrasena_valida) {
        $_SESSION['usuario'] = $_POST['usuario'];
        header('Location: pagina_venta_motos.php');
        exit();
    } else {
        $mensaje_error = 'Credenciales incorrectas';
    }
}
?>
<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Iniciar Sesión</h1>

    <?php if (isset($mensaje_error)) : ?>
        <p><?php echo $mensaje_error; ?></p>
    <?php endif; ?>

    <form class="iniciosesion" method="post" action="iniciar_sesion.php">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>

        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>