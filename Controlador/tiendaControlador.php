<?php
require_once("../Modelo/conexion.php");
require_once("../Modelo/tiendaModelo.php");

$TiendaModel = new TiendaModelo();

if (isset($_POST['RegistrarTienda'])) {

    $TiendaModel->setNombreTienda($_POST['nombreTienda']);
    $TiendaModel->setFechaApertura($_POST['fechaApertura']);

    $TiendaRegistrada = $TiendaModel->RegistrarTienda();
    if ($TiendaRegistrada) {
?>
        <script>
            alert("Tienda registrada correctamente  ");
            window.location.href = "../Vista/listarTiendas.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("hubo un error ");
        </script>
<?php
    }
}
