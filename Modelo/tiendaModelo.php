<?php
class tiendaModelo
{

    private $idTienda;
    private $nombreTienda;
    private $fechaApertura;


    public function setIdTienda($idTienda)
    {
        $this->idTienda = $idTienda;
    }
    public function getIdTienda()
    {
        return $this->idTienda;
    }

    public function setNombreTienda($nombreTienda)
    {
        $this->nombreTienda = $nombreTienda;
    }
    public function getNombreTienda()
    {
        return $this->nombreTienda;
    }


    public function setFechaApertura($fechaApertura)
    {
        $this->fechaApertura = $fechaApertura;
    }
    public function getFechaApertura()
    {
        return $this->fechaApertura;
    }


    function RegistrarTienda()
    {
        $RegistroExitoso = false;
        $Db = conexion::conectar();

        $sql = $Db->prepare('INSERT INTO tienda VALUES (NULL, :nombreTienda, :fechaApertura)');

        $sql->bindValue("nombreTienda", $this->getNombreTienda());
        $sql->bindValue("fechaApertura", $this->getFechaApertura());

        try {
            $sql->execute();
            $RegistroExitoso = true;
            return $RegistroExitoso;
        } catch (Exception $e) {
            echo ("Ha ocurrido un error" . $e->getMessage());
        }
    }

    function ListarTiendas()
    {
        $Db = conexion::conectar();
        $sql = $Db->query("SELECT * FROM tienda");
        $listarTiendas = [];
        foreach ($sql->fetchAll() as  $value) {
            $tiendas = new tiendaModelo();
            $tiendas->setIdTienda($value['idTienda']);
            $tiendas->setNombreTienda($value['nombreTienda']);
            $tiendas->setFechaApertura($value['fechaApertura']);
            $listarTiendas[] = $tiendas;
        }
        return $listarTiendas;
    }
}
