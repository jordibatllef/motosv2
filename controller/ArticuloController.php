<?php


include_once 'model/articuloDao.php';




//include_once 'model/ArticuloDAO.php';

class ArticuloController{


    public function list(){
   
        $listaarticulos = ArticuloDAO::getAllArticulos();
        $view = 'views/articulos/listado.php';
        include_once 'views/main.php';

    
        
     }

    public function add(){
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $idcategoria = $_POST['idcategoria'];

        ArticuloDAO::add($nombre, $precio, $descripcion ,$idcategoria);

        header("Location:".url."?controller=Dashboard&action=addarticle");
   
    }
    

    public function edit(){
        echo '<h1>Crear Articulo</h1>';
    }

    public function delete(){
        $id = $_GET['id'];

        ArticuloDAO::delete($id);
        header("Location:".url."?controller=Dashboard");
    }

    public function detail(){
        echo '<h1>Datos Articulo</h1>';
    }
    public function nada(){
        echo '<h1>Datos Articulo</h1>';
    }


}









