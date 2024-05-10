<?php

include_once 'model/ArticuloDAO.php';

class ComprasController{

    public function list(){
        
        
        //$listaarticulos = ArticuloDAO::getAllArticulos();
        //$listaarticulos = [];
     
        $view = 'views/carrito/cesta.php';
        include_once 'views/main.php';
        
    }

    public function addarticle(){
        
        $view = 'views/admin/articulos/add.php';
        include_once 'views/admin/dashboard.php';
       
    }

}