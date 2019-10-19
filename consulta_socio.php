<?php
require_once('include/seguridad.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Consulta de socios</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="./css/main.css">
  <!-- DATATABLES -->
  <link rel="stylesheet" type="text/css" href="datatables/jquery.dataTables.min.css">
  <link href="datatables/buttons.dataTables.min.css" rel="stylesheet" />
  <link href="datatables/responsive.dataTables.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="js/bootbox.min.js">

  <!-- <script>
    function abrir(url) {
      open('ver_socio.php?n=' + url, '', 'top=700,left=700,width=700,height=500');
    }
  </script> -->
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
          <i class="zmdi zmdi-search zmdi-hc-fw"></i>
          Busqueda <small>de socios</small></h1>
      </div>

    </div>
    <div class="full-box text-center" style="padding: 30px 10px;">
      <!-- DATATABLE CON TODOS LOS SOCIOS -->
      <div class="panel-body table-responsive" id="listadoregistros">
        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <th>N° Socio</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Ciudad</th>
            <th>Email</th>
            <th>Estado</th>
            <th>Celular</th>
            <th>Acciones</th>
          </thead>
          <tbody>
          </tbody>
        </table>


        <!-- Modal Structure -->
        <div class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

  </section>
  <!--====== Scripts -->
  <script src="./js/jquery-3.1.1.min.js"></script>
  <script src="./js/sweetalert2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/material.min.js"></script>
  <script src="./js/ripples.min.js"></script>
  <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="./js/main.js"></script>

  <!-- jQuery -->
  <script src="js/jquery-3.1.1.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="js/bootstrap.min.js"></script>
  <!-- DATATABLES -->
  <script src="datatables/jquery.dataTables.min.js"></script>
  <script src="datatables/dataTables.buttons.min.js"></script>
  <script src="datatables/buttons.html5.min.js"></script>
  <script src="datatables/buttons.colVis.min.js"></script>
  <script src="datatables/jszip.min.js"></script>
  <script src="datatables/pdfmake.min.js"></script>
  <script src="datatables/vfs_fonts.js"></script>

  <script src="js/bootbox.min.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script src="js/solicitud.js"></script>
  <script src="js/socio.js"></script>
</body>

</html>