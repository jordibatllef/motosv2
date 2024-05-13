<?php

include_once 'model/ArticuloDAO.php';

class ComprasController{

    public function list(){
        

        //$listaarticulos = ArticuloDAO::getAllArticulos();
        //$listaarticulos = [];
        session_start();

        $articulos_cesta = [];

        if ($_SESSION['cesta'] !== null) {
            $articulos_cesta = $_SESSION['cesta'];
        }
        

        $view = 'views/carrito/cesta.php';
        include_once 'views/main.php';
        
    }

    public function addarticle(){
        
        $view = 'views/admin/articulos/add.php';
        include_once 'views/admin/dashboard.php';
       
    }

}






























//si no es nulo que haga la asignacion, i si es nulo no la haga  $articulos_cesta = [];

       // $articulos_cesta ??=  $_SESSION['cesta'];