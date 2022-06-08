<?php
class conexion
{
    static function conectar()
    {
        $dsn = 'mysql:dbname=tredapruebatecnica;host=localhost';
        $usuario = 'root';
        $contraseña = '';
        try {
            $mbd = new PDO($dsn, $usuario, $contraseña);
            $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $mbd;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
 //$res= conexion::conectar();
 //echo var_dump($res);