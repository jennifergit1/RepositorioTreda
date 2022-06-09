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
            <div class="row  justify-content-between">
                    <a href="index.php" class="btn btn-info col-md-3">Volver al Inicio</a>
                    <a href="tiendaRegistrar.php" class="btn btn-success col-md-3">Registrar tienda</a>
            </div>
            <br>
            <table class="table table-bordered bg-white table-striped">
                <thead>
                    <tr>
                        <th>Id </th>
                        <th>Nombre tienda</th>
                        <th>Fecha de apertura</th>
                        <th>Opciones</th>
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
                            <td>
                            <a href="editarTienda.php?idTienda=<?php echo $value->getIdTienda(); ?>" class="btn btn-sm btn-info">Editar</a>
                         </td>
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