<?php

class Articulo
{
    private $id_articulos;
    private $nombre;
    private $precio;
    private $descripcion;
    private $idcategoria;
    public $img;

    public function __construct(){    
    }

    public function getIdarticulo()
    {
        return $this->id_articulos;
    }

    public function setIdarticulo($id_articulos)
    {
        $this->id_articulos = $id_articulos;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }


    public function getImg()
    {
        return $this->img;
    }

  
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }
}
