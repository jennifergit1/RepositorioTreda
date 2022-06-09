<?php
require_once("header.php");
require_once("../Modelo/conexion.php");
require_once("../Modelo/tiendaModelo.php");


$tiendaModelo = new TiendaModelo();
$tiendaModelo-> setIdTienda($_GET['idTienda']);
$listaDatosTienda = $tiendaModelo->ListarDatosTiendas();


?>

<div class="container">
    <form action="../Controlador/tiendaControlador.php "  method="POST" style="margin-top: 220px;">
        <h1 class="text-center">Editar Tienda </h1>
        <input type="hidden" name="idTienda" value="<?php echo $_GET["idTienda"]?>">
        <div class="input-group">
            <input  type="text" class="form-control" id="nombreTienda" name="nombreTienda" value="<?php echo $listaDatosTienda['nombreTienda']; ?>">
        </div>
        <div class="input-group mt-3">
            <input type="date" class="form-control m-0" id="fechaApertura" name="fechaApertura" value="<?php echo $listaDatosTienda['fechaApertura']; ?>">
        </div>
        <div class="row justify-content-end " style="margin-top: 30px;">
            <div class="col-6">
                <button type="submit" id="editarTienda" name="editarTienda" class="btn btn-success btn-lg">Editar tienda</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
</div>


<?php
require_once("footer.php");
?>