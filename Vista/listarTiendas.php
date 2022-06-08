<?php
require_once("header.php");
require_once("../Modelo/conexion.php");
require_once("../Modelo/tiendaModelo.php");

$tiendaModelo = new tiendaModelo();
$listaTiendas = $tiendaModelo->ListarTiendas();

?>

<div class="continer-fluid">
    <div class="row  justify-content-center ">
        <div class="col-md-8 mt-5">
            <h2 style="text-align: center;">Tiendas Registradas</h2>
            <br>
            <div class="row  justify-content-end">
                <div class="col-4 ">
                    <a href="tiendaRegistrar.php" class="btn btn-success ">Registrar Nueva Tienda</a>
                </div>
            </div>
            <br>
            <table class="table table-bordered bg-white">
                <thead>
                    <tr>
                        <th>Id </th>
                        <th>Nombre Tienda</th>
                        <th>Fecha de apertura</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listaTiendas as $value) {
                    ?>
                        <tr>
                            <td> <?php echo $value->getIdTienda(); ?></td>
                            <td> <?php echo $value->getNombreTienda(); ?></td>
                            <td> <?php echo $value->getFechaApertura(); ?></td>
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