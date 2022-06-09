<?php
require_once("header.php");
?>

<div class="container">
    <form action="../Controlador/tiendaControlador.php "  method="post" style="margin-top: 220px;">
        <h1 class="text-center">Registar Tienda </h1>
        <div class="input-group">
            <input  type="text" class="form-control" id="nombreTienda" name="nombreTienda" placeholder="Nombre de la tienda" requiered>
        </div>
        <div class="input-group mt-3">
            <input type="date" class="form-control m-0" id="fechaApertura" name="fechaApertura" placeholder="Fecha de Apertura">
        </div>
        <div class="row justify-content-around " style="margin-top: 30px;">
                    <a href="listarTiendas.php" class="btn btn-info col-md-3">Volver</a>
                <button type="submit" id="RegistrarTienda" name="RegistrarTienda" class="btn btn-success col-md-3">Registrar Tienda</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
</div>

<?php
require_once("footer.php");
?>