<?php

include_once 'config/database.php';
include_once 'Compras.php';

class ArticuloDAO
{

    public static function getAllCompras()
    {
        $con = Database::connect();

        $stmt = $con->prepare("SELECT * FROM compras");
        $stmt->execute();
        $result = $stmt->get_result();

        $listacompras = [];

        while ($compra = $result->fetch_object('Compras')) {
            $listacompras[] = $compras;
        }

        $con->close();
        return $listacompras;
    }

    public static function add($idcompras, $preciototal, $fecha ,$idusuario)
    {
        $con = Database::connect();
        $stmt = $con->prepare("INSERT INTO compras (idcompras, precio_total, fecha,id_usuario) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sdssi",$idcompras, $preciototal, $fecha ,$idusuario);
        $stmt->execute();
        $con->close();
    }
    public static function delete($id)
    {
        $con = Database::connect();
        $stmt = $con->prepare("DELETE FROM compras WHERE idcompras = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $con->close();
    }
}
