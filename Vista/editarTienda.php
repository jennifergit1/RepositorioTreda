<?php
require_once("header.php");
require_once("../Modelo/conexion.php");
require_once("../Modelo/tiendaModelo.php");


$tiendaModelo = new TiendaModelo();
$tiendaModelo->setIdTienda($_GET['idTienda']);
$listaDatosTienda = $tiendaModelo->ListarDatosTiendas();


?>

<div class="container">
    <div class="">
        <form action="../Controlador/tiendaControlador.php " method="POST" style="margin-top: 220px;">
            <h1 class="text-center">Editar Tienda </h1>
            <input type="hidden" name="idTienda" value="<?php echo $_GET["idTienda"] ?>">
            <div class="input-group col-4">
                <input type="text" class="form-control col-md-5 col-lg-5 col-sm-12" id="nombreTienda" name="nombreTienda" value="<?php echo $listaDatosTienda['nombreTienda']; ?>">
            </div>
            <div class="input-group mt-3 col-4">
                <input type="date" class="form-control m-0 col-md-5 col-lg-5 col-sm-12" id="fechaApertura" name="fechaApertura" value="<?php echo $listaDatosTienda['fechaApertura']; ?>">
            </div>
            <div class="row justify-content-around" style="margin-top: 30px;">
                    <a href="listarTiendas.php" class="btn btn-info col-md-3">Volver</a>
                <button type="submit" id="editarTienda" name="editarTienda" class="btn btn-success col-md-3">Editar tienda</button>
            </div>
        </form>
    </div>
</div>


<?php
require_once("footer.php");
?>