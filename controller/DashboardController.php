<?php

include_once 'model/ArticuloDAO.php';

class DashboardController{

    public function list(){
        
        //$listaarticulos = ArticuloDAO::getAllArticulos();
        $listaarticulos = [];
        $view = 'views/admin/articulos/listado.php';
        include_once 'views/admin/dashboard.php';
        
    }

    public function addarticle(){
        
        $view = 'views/admin/articulos/add.php';
        include_once 'views/admin/dashboard.php';
       
    }

}