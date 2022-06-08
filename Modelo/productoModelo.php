<?php

class productoModelo
{

    private $sku;
    private $nombreProducto;
    private $descripcionProducto;
    private $valorProducto;
    private $imagenProducto;
    private $tienda;


    public function setSku($sku)
    {
        $this->sku = $sku;
    }
    public function getSku()
    {
        return $this->sku;
    }

    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;
    }
    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    public function setDescripcionProducto($descripcionProducto)
    {
        $this->descripcionProducto = $descripcionProducto;
    }
    public function getDescripcionProducto()
    {
        return $this->descripcionProducto;
    }

    public function setValorProducto($valorProducto)
    {
        $this->valorProducto = $valorProducto;
    }
    public function getValorProducto()
    {
        return $this->valorProducto;
    }


    public function setImagenProducto($imagenProducto)
    {
        $this->imagenProducto = $imagenProducto;
    }
    public function getImagenProducto()
    {
        return $this->imagenProducto;
    }


    public function setTienda($tienda)
    {
        $this->tienda = $tienda;
    }
    public function getTienda()
    {
        return $this->tienda;
    }

    function RegistrarProducto()
    {
        $db = conexion::conectar();
        $registroExitoso = false;

        $sql = $db->prepare("INSERT INTO producto VALUES(NULL,:nombreProducto,:descripcionProducto,:valorProducto,:tienda,:imagenProducto) ");
        $sql->bindValue("nombreProducto", $this->getNombreProducto());
        $sql->bindValue("descripcionProducto", $this->getDescripcionProducto());
        $sql->bindValue("valorProducto", $this->getValorProducto());
        $sql->bindValue("tienda", $this->getTienda());
        $sql->bindValue("imagenProducto", $this->getImagenProducto());



        try {
            $sql->execute();
            $registroExitoso = true;
            return $registroExitoso;
        } catch (Exception $e) {
            echo "ocurrio un error:" . $e->getMessage();
        }
    }

    function ListarProductos()
    {
        $Db = conexion::conectar();
        $sql = $Db->query("SELECT p.SKU,p.nombreProducto,p.descripcionProducto,p.valorProducto,p.imagenProducto,t.nombreTienda FROM producto P JOIN tienda t ON t.idTienda = p.tienda");
        $listarProductos = [];
        foreach ($sql->fetchAll() as  $value) {
            $productos = new productoModelo();
            $productos->setSku($value['SKU']);
            $productos->setNombreProducto($value['nombreProducto']);
            $productos->setDescripcionProducto($value['descripcionProducto']);
            $productos->setValorProducto($value['valorProducto']);
            $productos->setImagenProducto($value['imagenProducto']);

            $listarProductos[] = $productos;
        }
        return $listarProductos;
    }
}
