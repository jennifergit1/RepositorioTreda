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
            <h2 style="text-align: center;">Productos Registrados</h2>
            <br>
            <div class="row justify-content-between">
                    <a href="index.php" class="btn btn-info col-md-3">Volver al Inicio</a>
                    <a href="productoRegistrar.php" class="btn btn-success col-md-3">Registrar producto</a>
            </div>
            <br>
            <table class="table table-bordered bg-white table-striped bg-white">
                <thead>
                    <tr>
                        <th>Id </th>
                        <th>Nombre producto</th>
                        <th>Descripcion</th>
                        <th>Valor</th>
                        <th>tienda</th>
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
                            <td> <?php echo $value->getTienda(); ?></td>
                            <td> <?php echo $value->getImagenProducto(); ?></td>
                        </tr>   
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
require_once("footer.php");
?>