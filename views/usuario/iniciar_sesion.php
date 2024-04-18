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

<h1 class="mi-clase">Iniciar Sesión</h1>
    
<?php if (isset($mensaje_error)) : ?>
    <p><?php echo $mensaje_error; ?></p>
<?php endif; ?>

<form class="iniciosesion" method="post" action="iniciar_sesion.php">
    <label for="usuario">USUARIO:</label>
    <input type="text" id="usuario" name="usuario" required>

    <label for="contrasena">CONTRASEÑA:</label>
    <input type="password" id="contrasena" name="contrasena" required>

    <input type="submit" value="Iniciar Sesión">

    <!-- Botones de inicio de sesión social -->
    <a href="auth_google.php" class="buttongoogle"></a>
    <a href="auth_facebook.php" class="buttonfacebook"></a>
    <a href="auth_apple.php" class="buttonapple"></a>
</form>

