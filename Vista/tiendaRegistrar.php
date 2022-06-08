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
    <div class="container">

        <form action="../Controlador/tiendaControlador.php " method="post" style="margin-top: 220px;">
        <h1 class="text-center">Registar Tienda </h1>
            <div class="input-group">
                <input type="text" class="form-control" id="nombreTienda" name="nombreTienda" placeholder="Nombre de la tienda">
            </div>

            <div class="input-group mt-3" data-provide="datepicker">
                <input type="date" class="form-control m-0" id="fechaApertura" name="fechaApertura" placeholder="Fecha de Apertura" autocomplete="">
            </div>

            <div class="row justify-content-end " style="margin-top: 30px;">
                <div class="col-6">
                    <button type="submit" id="RegistrarTienda" name="RegistrarTienda" class="btn btn-sm btn-outline-primary btn-block">Registrar Tienda</button>
                  
                </div>
                <!-- /.col -->
            </div>
        </form>


    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>