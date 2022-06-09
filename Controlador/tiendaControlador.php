<?php
require_once("../Modelo/conexion.php");
require_once("../Modelo/tiendaModelo.php");

$TiendaModel = new TiendaModelo();

if (isset($_POST['RegistrarTienda'])) {

    if (empty($_POST['nombreTienda']) || empty($_POST['fechaApertura'])) {
?>
        <script>
            alert(" Todos los campos son aligatorios ");
            window.location.href = "../Vista/tiendaRegistrar.php";
        </script>
    <?php
    } else {
        $nombreTienda = $TiendaModel->setNombreTienda($_POST['nombreTienda']);
        $fechaApertura = $TiendaModel->setFechaApertura($_POST['fechaApertura']);

        $TiendaRegistrada = $TiendaModel->RegistrarTienda();
    }

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
} else{

    
}




if (isset($_POST['editarTienda'])) {

if (empty($_POST['nombreTienda']) || empty($_POST['fechaApertura'])) {
 ?>
         <script>
             alert(" Todos los campos son aligatorios ");
             window.location.href = "../Vista/editarTienda.php";
         </script>
     <?php
     } else {

        $nombreTienda = $TiendaModel->setIdTienda($_POST['idTienda']);
        $nombreTienda = $TiendaModel->setNombreTienda($_POST['nombreTienda']);
        $fechaApertura = $TiendaModel->setFechaApertura($_POST['fechaApertura']);
        

        $EditadoExitoso = $TiendaModel->EditarTienda();
        var_dump($EditadoExitoso); 

     }
        
    if ($EditadoExitoso) {
        ?>
        <script>
            alert("Tienda Editada  correctamente  ");
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

    