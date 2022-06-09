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
          <label for="frase" class="form-label">Ingrese una frase</label>
          <input type="text" class="form-control" name="frase" id="frase">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form><br>
      <?php if (isset($_POST["frase"])) {
        if (strlen($_POST["frase"]) > 0) { ?>
          <br>
          <h2>Frase:</h2>
          <p><?php $string = EditarFrase($_POST["frase"]);
              echo $string; ?></p>
      <?php }
      } ?>
    </div>
  </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>
<?php
function EditarFrase($string)
{
  $stringEditada = "";
  $arrayString = explode(' ', $string);
  foreach ($arrayString as $item) {
    if (strlen($item) > 5) {
      $stringEditada .= strrev($item) . " ";
    } else {
      $stringEditada .=  $item . " ";
    }
  }
  return $stringEditada;
}

?>