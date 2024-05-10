<?php

class UserController {

    public function list() {
        include 'views/user/list.php';
    }

    public function addarticle() {
        include 'views/usuario/iniciar_sesion.php';
    }
    public function addcesta() {
        include 'views/carrito/cesta.php';
    }


    public function login() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario_valido = 'usuario';
            $contrasena_valida = 'contrasena';

            if ($_POST['usuario'] == $usuario_valido && $_POST['contrasena'] == $contrasena_valida) {
                $_SESSION['usuario'] = $_POST['usuario'];
                exit();
            } else {
                $mensaje_error = 'Credenciales incorrectas';
            }
        }

        $view = 'views/usuario/iniciar_sesion.php';
        include_once 'views/maininiciarsesion.php';    
    }
}
