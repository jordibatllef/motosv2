<form method="post">
    
</form>

<h1 class="mi-clase">Iniciar Sesión</h1>
    
<?php if (isset($mensaje_error)) : ?>
    <p><?php echo $mensaje_error; ?></p>
<?php endif; ?>

<form class="iniciosesion" method="post"  action="?controller=Usuario&action=login" >
   
    <input type="submit" value="Iniciar Sesión">

    <!-- Botones de inicio de sesión social -->
    <a href="auth_google.php" class="buttongoogle"></a>
    <a href="auth_facebook.php" class="buttonfacebook"></a>
    <a href="auth_apple.php" class="buttonapple"></a>
</form>


  <!-- aixo va dintre la clase inicio sesion de mes adalt
    <label for="usuario">USUARIO:</label>
    <input type="text" placeholder="Usuario..." id="usuario" name="usuario" required>

    <label for="contrasena">CONTRASEÑA:</label>
    <input type="password" placeholder="Contraseña..." id="contrasena" name="contrasena" required> -->