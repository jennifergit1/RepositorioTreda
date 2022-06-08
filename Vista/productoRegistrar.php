<?php
require_once("../Modelo/conexion.php");
require_once("../Modelo/tiendaModelo.php");

$tiendaModelo = new tiendaModelo();
$listaCategorias = $tiendasModel->listarTiendas();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Treda Solutions Prueba</title>
</head>

<body>

<div class="container " style="margin-top: 20px;">
<div class="register-box">
        <div class="card">
            <div class="card-body register-card-body">
                <h1 class="login-box-msg text-center">Registrar Producto</h1>
                <form action="../Controlador/productoControlador.php" method="post" id="FormRegistrarProducto">
                    <div class="input-group">
                        <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" placeholder="Nombre del producto"> 
                    </div> 
                 
                    <div class="input-group mt-3">
                    <textarea class="form-control" id="descripcionProducto" name="descripcionProducto" rows="3" placeholder="Descripcion del producto"></textarea>
                    </div> 
                   
                    <div class="input-group mt-3" >
                        <input type="number" class="form-control m-0" id="valorProducto" name="valorProducto" placeholder="valor del producto">
                    </div> 

                    <div class="input-group mt-3" >
                        <input type="text" class="form-control m-0" id="tienda" name="tienda" placeholder="Tienda">
                    </div> 

                    <div class="input-group mt-3" >
                        <input type="file" class="form-control m-0" id="imagenProducto" name="imagenProducto" placeholder="seleccionar imagen">
                    </div> 
                  
                    <div class="row justify-content-end">
                        <div class="col-3">
                            <button type="submit" id="RegistrarProducto" name="RegistrarProducto" class="btn btn-sm btn-outline-primary btn-block">Registrar Producto</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <a href=" " class="text-center">Ya tengo una cuenta.</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    </div>
    </body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>