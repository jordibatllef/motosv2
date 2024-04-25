<?php

class Articulo
{


    public function __construct(){    
    }
//////////
    public function getIdcompras()
    {
        return $this->idcompras;
    }

    public function getId_compras($idcompras)
    {
        $this->idcompras = $idcompras;

        return $this;
    }
////////////////////////S
    public function getPreciototal()
    {
        return $this->precio_total;
    }


    public function getPrecio_total($precio_total)
    {
        $this->precio_total = $precio_total;

        return $this;
    }
//////////////////////////////////////
    public function setFecha()
    {
        return $this->fecha;
    }

    public function set_Fecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    //////////////////////
    public function getIdusuario()
    {
        return $this->id_usuario;
    }

    public function getId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }

}
