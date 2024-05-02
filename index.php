<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once 'config/parameters.php';

include_once 'controller/ArticuloController.php';
include_once 'controller/DashboardController.php';
include_once 'controller/UserController.php';
include_once 'controller/ComprasController.php';
include_once 'controller/UsuarioController.php';


if(!isset($_GET['controller'])){
    header("Location:".url."?controller=Articulo");
}else{

    $nombre_controlador = $_GET['controller'].'Controller';
    
    if(class_exists($nombre_controlador)){
        $controller = new $nombre_controlador();

        if(isset($_GET['action']) &&  method_exists($controller, $_GET['action']) ){
            $action = $_GET['action'];
        }else{
            $action = action_default;
        }

        $controller->$action();
    }else{
        header("Location:".url."?controller=Articulo");
    }
}

?>




   

