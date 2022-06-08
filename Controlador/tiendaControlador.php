<?php
require_once("../Modelo/conexion.php");
require_once("../Modelo/tiendaModelo.php");

$TiendaModel = new TiendaModelo();

if (isset($_POST['RegistrarTienda'])) {

    $TiendaModel->setNombreTienda($_POST['nombreTienda']);
    $TiendaModel->setFechaApertura($_POST['fechaApertura']);

    $TiendaRegistrada = $TiendaModel->RegistrarTienda();
var_dump($TiendaRegistrada);

    if ($TiendaRegistrada) {
        ?>
                <script>
                    alert("Usuario tienda registrada correctamente  ");
                    window.location.href = "../Vista/index.php";
                </script>
            <?php
            } else {
            ?>
                <script>
                 //  window.location.href = "../../vista/usuariosVista/iniciarSesion.php";
                 alert("huno un error ");
                </script>
                <?php
            }
        }
