<?php
require_once("../Modelo/conexion.php");
require_once("../Modelo/productoModelo.php");

$ProductoModel = new ProductoModelo();

if (empty($_POST['nombreProducto']) || empty($_POST['descripcionProducto']) || empty($_POST['valorProducto']) || empty($_POST['idTienda']) || empty($_POST['imagenProducto'])) {
?>
    <script>
        alert(" Todos los campos son aligatorios ");
        window.location.href = "../Vista/ProductoRegistrar.php";
    </script>
<?php
} else {
    $ProductoModel->setNombreProducto($_POST['nombreProducto']);
    $ProductoModel->setDescripcionProducto($_POST['descripcionProducto']);
    $ProductoModel->setValorProducto($_POST['valorProducto']);
    $ProductoModel->setTienda($_POST['idTienda']);
    $ProductoModel->setImagenProducto($_POST['imagenProducto']);

    $ProductoRegistrado = $ProductoModel->RegistrarProducto();
}



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
        alert("hubo un error ");
    </script>
<?php
}
