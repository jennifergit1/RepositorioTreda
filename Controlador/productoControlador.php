<?php
require_once("../Modelo/conexion.php");
require_once("../Modelo/productoModelo.php");

$ProductoModel = new ProductoModelo();

$ProductoModel->setNombreProducto($_POST['nombreProducto']);
$ProductoModel->setDescripcionProducto($_POST['descripcionProducto']);
$ProductoModel->setValorProducto($_POST['valorProducto']);
$ProductoModel->setTienda($_POST['idTienda']);
$ProductoModel->setImagenProducto($_POST['imagenProducto']);


$ProductoRegistrado = $ProductoModel->RegistrarProducto();

if ($ProductoRegistrado) {
?>
    <script>
        alert("Producto registradoa correctamente  ");
        window.location.href = "../Vista/listarProductos.php";
    </script>
<?php
} else {
?>
    <script>
        //  window.location.href = "../../vista/usuariosVista/iniciarSesion.php";
        alert("hubo un error ");
    </script>
<?php
}
