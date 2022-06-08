<?php
require_once("../Modelo/conexion.php");
require_once("../Modelo/productoModelo.php");

$ProductoModel = new ProductoModelo();

$ProductoModel->setNombreProducto($_POST['nombreProducto']);
$ProductoModel->setDescripcionProducto($_POST['descripcionProducto']);
$ProductoModel->setValorProducto($_POST['valorProducto']);
$ProductoModel->setTienda($_POST['tienda']);
$ProductoModel->setImagenProducto($_POST['imagenProducto']);


$ProductoRegistrado = $ProductoModel->RegistrarProducto();


if ($TiendaRegistrada) {
    ?>
            <script>
                alert("Usuario tienda registrada correctamente  ");
                window.location.href = "../Vista/index.php";
            </script>
        <?php
        } else {
        ?>
            <script>
             //  window.location.href = "../../vista/usuariosVista/iniciarSesion.php";
             alert("huno un error ");
            </script>
            <?php
        }
    