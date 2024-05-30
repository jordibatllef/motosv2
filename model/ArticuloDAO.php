<?php

include_once 'config/database.php';
include_once 'Articulo.php';

class ArticuloDAO
{

    public static function getAllArticulos()
    {
        $con = Database::connect();

        $stmt = $con->prepare("SELECT * FROM articulos");
        $stmt->execute();
        $result = $stmt->get_result();

        $listaarticulos = [];

        while ($articulo = $result->fetch_object('Articulo')) {
            $listaarticulos[] = $articulo;
        }

        $con->close();
        return $listaarticulos;
    }

    public static function add($nombre, $precio, $descripcion ,$idcategoria, $img="p1.jfif")
    {
        $con = Database::connect();
        $stmt = $con->prepare("INSERT INTO articulos (nombre, precio, descripcion, img, id_categoria) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sdssi",$nombre, $precio, $descripcion, $img ,$idcategoria);
        $stmt->execute();
        $con->close();
    }
    public static function delete($id)
    {
        $con = Database::connect();
        $stmt = $con->prepare("DELETE FROM articulos WHERE id_articulos = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $con->close();
    }
}

