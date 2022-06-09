<?php
require_once("../Vista/header.php");
require_once("../Modelo/conexion.php");
require_once("../Modelo/tiendaModelo.php");

$tiendaModelo = new tiendaModelo();
$listaTiendas = $tiendaModelo->ListarTiendas();
?>

<div class="container " style="margin-top: 20px;">
    <div class="register-box">
        <div class="card">
            <div class="card-body register-card-body">
                <h1 class="login-box-msg text-center">Registrar Producto</h1>
                <form action="../Controlador/productoControlador.php" method="post" id="FormRegistrarProducto">
                    <div class="">
                        <label for="">Nombre del producto</label><br>
                        <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" placeholder="Nombre del producto">
                    </div>
                    <div class="mt-3">
                        <label for="">Descripción</label>
                        <textarea class="form-control" id="descripcionProducto" name="descripcionProducto" rows="3" placeholder="Descripcion del producto"></textarea>
                    </div>
                    <div class="mt-3">
                        <label for="">Valor de producto</label>
                        <input type="number" class="form-control m-0" id="valorProducto" name="valorProducto" placeholder="Valor del producto">
                    </div>
                    <div class="">
                        <br>
                        <label>Seleccionar Tienda </label>
                        <select class="form-control" id="idTienda" name="idTienda">
                            <?php foreach ($listaTiendas as $value) { ?>
                                <option value="<?php echo $value->getIdTienda(); ?>"><?php echo $value->getNombreTienda(); ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="">Imagen</label>
                        <input type="file" class="form-control m-0" id="imagenProducto" name="imagenProducto" placeholder="seleccionar imagen">
                    </div>
                    <br>
                    <div class="row justify-content-around">
                    <a href="listarProductos.php" class="btn btn-info col-md-3">Volver</a>
                            <button type="submit" id="RegistrarProducto" name="RegistrarProducto" class="btn btn-success col-md-3">Registrar Producto</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once("../Vista/footer.php");
?>