<?php

include_once 'model/ArticuloDAO.php';

class ComprasController{

    public function list(){
        
        
        //$listaarticulos = ArticuloDAO::getAllArticulos();
        //$listaarticulos = [];
        $view = 'views/cesta/ver_cesta.php';
        //include_once 'views/admin/dashboard.php';
        
    }

    public function addarticle(){
        
        $view = 'views/admin/articulos/add.php';
        include_once 'views/admin/dashboard.php';
       
    }

}