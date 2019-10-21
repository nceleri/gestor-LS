<?php
require_once('include/seguridad.php');

include('include/querys.php');

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>LSOnline - Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js" integrity="sha256-qSIshlknROr4J8GMHRlW3fGKrPki733tLq+qeMCR05Q=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" integrity="sha256-IvM9nJf/b5l2RoebiFno92E5ONttVyaEEsdemDC6iQA=" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js" integrity="sha256-arMsf+3JJK2LoTGqxfnuJPFTU4hAK57MtIPdFpiHXOU=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" integrity="sha256-aa0xaJgmK/X74WM224KMQeNQC2xYKwlAt08oZqjeF0E=" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" integrity="sha256-Uv9BNBucvCPipKQ2NS9wYpJmi8DTOEfTA/nH2aoJALw=" crossorigin="anonymous"></script>
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
					<i class="zmdi zmdi-alert-polygon zmdi-hc-fw"></i>
					Control <small>de estadisticas</small>
				</h1>
			</div>
		</div>
		<div class="full-box text-center">


			<!-- MOSTRAR CANTIDAD DE CLIENTES REGISTRADOS 
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Socios
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-female"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php totalSocios(); ?></p>
					<small>Activos</small>
				</div>
			</article>



			 MOSTRAR CANTIDAD DE AUTOS REGISTRADOS 
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Socios
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-female"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php totalSociosBaja(); ?></p>
					<small>dados de baja</small>
				</div>
			</article>


			 MOSTRAR CANTIDAD DE OPERARIOS 

			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					otro
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-money"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class=""><?php IngresosMes(); ?></p>
					<small>a disposicion</small>
				</div>
			</article>
		
-->
		</div>
	<div class="row">
		<div class="col-md-12">
			<center><h2>Gráficos estadísticos</h2></center>
		</div>		
	</div>
	<div class="row" style="margin-left: 5px;">
		<div class="col-md-6" id="chart">
			<center><h5>Medios de pago</h5></center>
			<canvas id="myChart" width="300px" height="300px"></canvas>
		</div>
		<div class="col-md-6" id="chart">
			<center><h5>Comparación por mes</h5></center>
			<canvas id="chartCuotas" width="300px" height="300px"></canvas>
		</div>
	</div>
	<div class="row" style="margin-left: 5px;">
		<div class="col-md-6" id="chart">
			<center><h5>Medios de pago</h5></center>
			<canvas id="chart3" width="300px" height="300px"></canvas>
		</div>
		<div class="col-md-6" id="chart">
			<center><h5>Pago de cuotas</h5></center>
			<canvas id="chart4" width="300px" height="300px"></canvas>
		</div>
	</div>
<script src="js/estadisticas.js"></script>
		</div>
	</div>
	</section>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
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