<?php
require_once('include/seguridad.php');

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
					<i class="zmdi zmdi-settings-square"></i>

					Configuración
					<small>de datos variables</small>
				</h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<form method="post" id="formActualizacion" name="formActualizacion">
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="text">Cuota menor</label>
						<input type="text" class="form-control" id="cuotamenor" name="cuota_menor">
					</div>
					<div class="form-group col-md-4">
						<label for="text">Cuota mayor</label>
						<input type="text" class="form-control" id="cuotamayor" name="cuota_mayor">
					</div>
					<div class="form-group col-md-4">
						<label for="text">Descuento al becado</label>
						<input type="text" class="form-control" id="descuentobecado" name="descuento_becado">
					</div>
				</div>
			</form>
			<div class="form-row">
				<div class="form-group col-md-12">
					<button type="button" onclick="actualizarConfiguraciones()" class="btn btn-secondary btn-lg btn-block">Actualizar valores</button>
				</div>
			</div>
		</div>

	</section>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script src="js/configuraciones.js"></script>
	<script>
		$.material.init();
	</script>
</body>

</html>