<?php
require_once('include/seguridad.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title><--INICIO--></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<?php
	include ('include/BarraLateral.php');
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
			  <h1 class="text-titles">Control <small>de estadisticas</small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">


			<!-- MOSTRAR CANTIDAD DE CLIENTES REGISTRADOS -->
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Socios
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-female"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $RES_CANTIDAD_CLIENTES; ?></p>
					<small>registrados</small>
				</div>
			</article>



			<!-- MOSTRAR CANTIDAD DE AUTOS REGISTRADOS -->
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Vehiculos
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-directions-car"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $RES_CANTIDAD_AUTOS; ?></p>
					<small>registrados</small>
				</div>
			</article>


				<!-- MOSTRAR CANTIDAD DE OPERARIOS -->

			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Operarios
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $RES_CANTIDAD_OPERARIOS; ?></p>
					<small>a disposicion</small>
				</div>
			</article>	
			
			
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