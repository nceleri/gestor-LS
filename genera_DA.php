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
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
					<i class="zmdi zmdi-card "></i>

					Generar
					<small>archivo de cuentas</small>
				</h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">

			<div class="card">

				<div class="card-body">
					<h5 class="card-title">Proceso de recopilación de información</h5>
					<p class="card-text">Este proceso buscará información en la base de datos para generar un archivo de texto.En este archivo, se guardarán los datos necesarios que se deben proporcionar al banco para el débito automático de las cuotas(solo de quienes tengan como medio de pago DEBITO y estén en estado ALTA). El archivo se genera con la fecha del día y mes corriente.</p>
					<input type="button" id="btnIniciar" href="#" onclick="iniciardebitos()" class="btn" style="background-color: #6b5bc1!important" value="Iniciar">
				</div>
			</div>
			<div class="progress">
				<div id="progress-bar" class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%">
				</div>
			</div>


		</div>

	</section>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>

	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script src="js/cuenta.js"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script>
		$.material.init();
	</script>
</body>

</html>