<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Prueba de logica - Primer punto</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <form method="post" action="" class="mb-5">
                <div class="mb-3">
                    <label for="numero" class="form-label">Ingrese un numero</label>
                    <input type="text" class="form-control" name="numero" id="numero">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form><br>
            <?php if (isset($_POST["numero"])) { 
                $numeros = Multiplos3y5($_POST["numero"]);?>
                    <br>
                    <h2 class="text-center">Solución:</h2>
                    <?php echo listarMultiplos3y5($numeros); ?>
                    <br>
                    <?php echo mostrarSuma($numeros); ?>
            <?php } ?>
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html> 
<?php

function Multiplos3y5($num)
{
    $numeros = [];
    for ($i = $num - 1; $i > 0; $i--) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            array_push($numeros, $i);
        }
    }
    return $numeros;
}
function listarMultiplos3y5($numeros)
{
    $string = "Los multiplos de 3 y 5 son: ";
    foreach ($numeros as $value) {
        $string .= $value . ", ";
    }
    return $string;
}
function mostrarSuma($numeros)
{
    $string = "La suma de los números es: ";
    $sumaMultiplos = 0;
    foreach ($numeros as $value) {
        $sumaMultiplos += $value;
    }
    return $string . $sumaMultiplos;
}
?>