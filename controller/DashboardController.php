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


    public function showUsuario(){
        
        $view = 'views/usuario/verUsuarios.php';
        include_once 'views/admin/dashboard.php';
       
    }
    public function addUsuario(){
        
        $view = 'views/usuario/addUsuario.php';
        include_once 'views/admin/dashboard.php';
       
    }


    //////////////////////////////////////////////////////////


    public function addProducto(){
        
        $view = 'views/usuario/addProducto.php';
        include_once 'views/admin/dashboard.php';
       
    }

    public function showProducto(){
        
        $view = 'views/usuario/verProductos.php';
        include_once 'views/admin/dashboard.php';
       
    }

}