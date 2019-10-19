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
					<i class=" zmdi zmdi-money zmdi-hc-fw"></i>Control de Caja <small>Ingresos/Egresos</small></h1>
			</div>
		</div>
		<div class="row">
			<form class="col-xs-12 col-md-10 col-md-offset-1">
				<div class="row">
					<!-- ****************************ingresos************************************ -->
					<div class="col-md-6">
						<div class="form-group">
							<i class="zmdi zmdi-plus-circle zmdi-hc-2x"></i>

							<button type="button" class="btn btn-success" id="ingreso_b" name="ingreso_b">cargar ingreso</button>
						</div>
						<div class="form-group label-floating">
							<label class="control-label" for="ingreso_m">ingresos</label>
							<input class="form-control" type="number" name="ingreso_m" id="ingreso_m">
						</div>
						<div class="form-group label-floating">
							<label class="control-label" for="ingreso_d">descripcion</label>
							<input class="form-control" type="text" name="ingreso_d" id="ingreso_d">
						</div>
						<div class="card">
							<div class="card-body">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Descripcion</th>
											<th>Monto</th>
										</tr>
									</thead>
									<tbody>
										<tr class="table-info">
											<th scope="row">1</th>
											<td>Venta de pollos</td>
											<td>$7494.00</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- ****************************egresos************************************ -->
					<div class="col-md-6 col-12 ">
						<div class="form-group">
							<i class="zmdi zmdi-minus-circle zmdi-hc-2x"></i>

							<button type="button" class="btn btn-danger" id="egreso_b" name="egreso_b">cargar egreso</button>
						</div>
						<div class="form-group label-floating">
							<label class="control-label " for="egreso_d">egresos</label>
							<input class="form-control" type="number" name="egreso_m" id="egreso_m">
						</div>
						<div class="form-group label-floating">
							<label class="control-label" for="egreso_d">descripcion</label>
							<input class="form-control" type="text" name="egreso_d" id="egreso_d">
						</div>
						<div class="card">
							<div class="card-body">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Descripcion</th>
											<th>Monto</th>
										</tr>
									</thead>
									<tbody>
										<tr class="table-info">
											<th scope="row">1</th>
											<td>boleta de luz</td>
											<td>$11012.00</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</form>
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
	<script>
		$.material.init();
	</script>
	<script src="./js/controlCajas.js"></script>

</body>

</html>