<?php
require_once("header.php");
require_once("../Modelo/conexion.php");
require_once("../Modelo/productoModelo.php");


$productoModelo = new productoModelo();
$listaProductos = $productoModelo->ListarProductos();

?>

<div class="continer-fluid">
    <div class="row  justify-content-center ">
        <div class="col-md-8 mt-5">
            <h2 style="text-align: center;">Productos Registradas</h2>
            <br>
            <div class="row  justify-content-end">
                <div class="col-4 ">
                    <a href="productoRegistrar.php" class="btn btn-success ">Registrar Nuevos Productos</a>
                </div>
            </div>
            <br>
            <table class="table table-bordered bg-white">
                <thead>
                    <tr>
                        <th>Id </th>
                        <th>Nombre producto</th>
                        <th>Descripcion</th>
                        <th>valor</th>
                        <th>imagen</th>
                        <th>imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listaProductos as $value) {
                    ?>
                        <tr>
                            <td> <?php echo $value->getSku(); ?></td>
                            <td> <?php echo $value->getNombreProducto(); ?></td>
                            <td> <?php echo $value->getDescripcionProducto(); ?></td>
                            <td> <?php echo $value->getValorProducto(); ?></td>
                            <td> <?php echo $value->getImagenProducto(); ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="row justify-content-around mt-3">
                <div class="col-4">
                    <a href="index.php" class="btn btn-sm btn-outline-danger btn-block">Volver al Inicio</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("footer.php");
?>