<?php
require_once('include/conexion.php');
require_once('include/seguridad.php');

$dni = $_GET['n'];

$QuerySocio = "SELECT * FROM socio WHERE id_socio= '$dni'";
$QueryInfo = "SELECT * FROM info_socio WHERE id_socio= '$dni'";
$QueryCuenta = "SELECT * FROM cuenta_socio WHERE id_socio='$dni'";

$Socio = ejecutarConsultaSimpleFila($QuerySocio); // ACA GUARDAMOS EN ARRAY DATOS DEL SOCIO
$Info = ejecutarConsultaSimpleFila($QueryInfo); // ACA LA INFO DEL SOCIO
$Cuenta = ejecutarConsultaSimpleFila($QueryCuenta); // DATOS DE LA CUENTA, PUEDE NO TENER

var_dump($Socio);
echo "<br>";
var_dump($Info);
echo "<br>";
var_dump($Cuenta);
die();
// $nro_socio = $res['nro_s'];
// $nombre = $res['nombre_s'];
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <title>
        <--INICIO-->
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <?php
    include('include/BarraLateral.php');
    ?>
    <!-- GENERAL -->
    <section class="full-box dashboard-contentPage">
        <!-- Barra superior -->
        <nav class="full-box dashboard-Navbar">
            <ul class="full-box list-unstyled text-right">
                <li class="pull-left">
                    <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
                </li>
            </ul>
        </nav>
        <!-- Contenido -->
        <div class="container-fluid">
            <div class="page-header">
                <h1 class="text-titles">
                    <i class=" zmdi zmdi-money zmdi-hc-fw"></i>Detalle socio numero:
                    <!-- <small>?php echo $nro_socio; ?</small> -->
                </h1>
            </div>
        </div>


        <!--====== Scripts -->
        <script src="./js/jquery-3.1.1.min.js"></script>
        <script src="./js/sweetalert2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/material.min.js"></script>
        <script src="./js/ripples.min.js"></script>
        <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="./js/main.js"></script>
        <script>
            $.material.init();
        </script>


</body>

</html>