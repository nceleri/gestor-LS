<?php
require_once('include/seguridad.php');
?>
<!DOCTYPE HTML>
<html lang="es">

<head>
	<title>LSOnline: Alta de socio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
	<?php
	include('include/BarraLateral.php');
	?>
	<!-- Contenido pagina-->

	<section class="full-box dashboard-contentPage">
		<!-- Barra superior -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
			</ul>
		</nav>

		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
				<h1 class="text-titles">
					<i class="zmdi zmdi-account zmdi-hc-fw"></i>Registro
					<small> de Socios</small>
				</h1>
			</div>
			<!-- content formulario -->

			<div class="row">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					<!-- comienza form -->
					<form id="form1" name="form1" method="post">
						<p class="lead">Datos Personales</p>
						<div class="row">
							<div class="form-group col-md-3 label-floating ">
								<label class="control-label">DNI</label>
								<input class="form-control" type="number" name="nro_s" id="nro_s" maxlength="9" minlength="5" required pattern="[0-9]+">
							</div>
							<div class="form-group col-md-3 label-floating">
								<label class="control-label">Cuil/t</label>
								<input class="form-control" type="number" name="cuil_s" id="cuil_s" maxlength="15" required>
							</div>
							<div class="form-group col-md-3 col-12 label-floating ">
								<label class="control-label">Apellido</label>
								<input class="form-control" type="text" name="apellido_s" id="apellido_s" maxlength="30" required>
							</div>
							<div class="form-group col-md-3 col-12 label-floating">
								<label class="control-label">Nombre</label>
								<input class="form-control" type="text" name="nombre_s" id="nombre_s" maxlength="30" required>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6 col-12 ">
								<label class="control-label">Fecha Nacimiento</label>
								<input class="form-control" type="date" name="f_nac_s" id="f_nac_s">
							</div>
							<div class="form-group col-md-6 col-12">
								<label class="control-label">Sexo</label>
								<select name="sexo_s" id="sexo_s" class="form-control">
									<option value="null" selected></option>
									<option value="M">Masculino</option>
									<option value="F">Femenino</option>
								</select>
							</div>
						</div>

						<p class="lead">Datos de Contacto</p>
						<div class="row">
							<div class="form-group col-md-4 col-12 label-floating ">
								<label class="control-label">Domicilio</label>
								<input class="form-control" type="text" name="domicilio_s" id="domicilio_s" maxlength="75" required>
							</div>
							<div class="form-group col-md-4 col-12 label-floating">
								<label class="control-label">Ciudad</label>
								<input class="form-control" type="text" name="ciudad_s" id="ciudad_s" maxlength="50" required>
							</div>
							<div class="form-group col-md-4 col-12 label-floating ">
								<label class="control-label">Codigo Postal</label>
								<input class="form-control" type="number" name="cpostal_s" id="cpostal_s" maxlength="4" required>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-4 col-12 label-floating">
								<label class="control-label">Numero de Celular</label>
								<input class="form-control" type="number" name="nro_celular_s" id="nro_celular_s" maxlength="15" required>
							</div>
							<div class="form-group col-md-4 col-12 label-floating">
								<label class="control-label">Numero de Telefono</label>
								<input class="form-control" type="number" name="nro_tel_s" id="nro_tel_s" maxlength="10" required>
							</div>
							<div class="form-group col-md-4 col-12 label-floating ">
								<label class="control-label">E-mail</label>
								<input class="form-control" type="text" name="email_s" id="email_s" maxlength="40" required>
							</div>
						</div>

						<p class="lead">Datos Generales</p>
						<div class="row">
							<div class="form-group col-md-3 col-12 label-floating">
								<label class="control-label">Obra Social</label>
								<input class="form-control" type="text" name="obra_social_s" id="obra_social_s" maxlength="50">
							</div>
							<div class="form-group col-md-3 col-12 label-floating ">
								<label class="control-label">Division</label>
								<input class="form-control" type="text" name="division_s" id="division_s" maxlength="7">
							</div>

							<div class="form-group col-md-3 col-12 ">
								<label class="control-label">Fecha Alta</label>
								<input class="form-control" type="date" name="f_alta_s" id="f_alta_s" required>
							</div>
							<div class="form-group col-md-3 col-12 ">
								<label class="control-label">Fichado UAR</label>
								<input class="form-control" type="date" name="fichadoUAR_s" id="fichadoUAR_s">
							</div>
						</div>
						<div class="form-group col-md-4 col-12">
							<label class="control-label">Carnet</label>
							<select name="carnet_s" id="carnet_s" class="form-control">
								<option value="null" selected></option>
								<option value="SI">SI posee carnet</option>
								<option value="NO">NO posee carnet</option>
							</select>
						</div>
						<div class="form-group col-md-4 col-12">
							<label class="control-label">Ficha</label>
							<select name="ficha_s" id="ficha_s" class="form-control">
								<option value="null" selected></option>
								<option value="SI">Completo la ficha</option>
								<option value="NO">NO completo la ficha</option>
							</select>
						</div>
						<div class="form-group col-md-4 col-12">
							<label class="control-label">Becado</label>
							<select name="becado_s" id="becado_s" class="form-control">
								<option value="null" selected></option>
								<option value="SI">Si</option>
								<option value="NO">No</option>
							</select>
						</div>

						<!-- DEBITO, HABILTA CASILLA DE CUENTA -->

						<div class="form-group col-md-6 col-12">
							<label class="control-label">Medio de pago</label>
							<select name="medio_de_pago" id="medio_de_pago" class="form-control">
								<option value="null" selected></option>
								<option value="Efectivo">EFECTIVO</option>
								<option value="Cobrador">COBRADOR</option>
								<option value="Debito">DEBITO AUTOMÁTICO</option>
							</select>
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="control-label">Categoría</label>
							<select name="categoria_s" id="categoria_s" class="form-control">
								<option value="null" selected></option>
								<option value="Mayor">MAYOR</option>
								<option value="Menor">MENOR</option>
								<option value="Vitalicio">VITALICIO</option>
								<option value="Empleado">EMPLEADO DEL CLUB</option>
							</select>
						</div>
				</div>


				<div class="col-md-6 col-12" id="debito">
					<p class="lead">Datos de Cuenta</p>

					<div class="form-group col-md-12 col-12">
						<label class="control-label">NombreTitular</label>
						<input class="form-control" type="TEXT" id="c_nombre" name="c_nombre" required>
					</div>
					<div class="form-group col-md-12 col-12 label-floating ">
						<label class="control-label">Apellido</label>
						<input class="form-control" type="text" id="c_apellido" name="c_apellido" maxlength="30" required>
					</div>
					<div class="form-group col-md-12 col-12">
						<label class="control-label">Cuenta</label>
						<select name="tipo_cuenta_s" id="tipo_cuenta_s" class="form-control">
							<option value="null" selected></option>
							<option value="CA">Caja de Ahorro</option>
							<option value="CC">Cuenta Corriente</option>
						</select>
					</div>


					<div class="form-group col-md-12 col-12 label-floating">
						<label class="control-label">Cuil/t</label>
						<input class="form-control" type="number" id="c_cuil" name="c_cuil" maxlength="15" required>
					</div>



					<div class="form-group col-md-12 col-12 label-floating">
						<label class="control-label">Numero de Cuenta</label>
						<input class="form-control" type="number" id="c_numerocuenta" name="c_numerocuenta" maxlength="10" required>
					</div>
					<div class="form-group col-md-12 col-12 label-floating">
						<label class="control-label">CBU</label>
						<input class="form-control" type="number" id="c_cbu" name="c_cbu" maxlength="10" required>
					</div>
					<div class="form-group col-md-12 col-12 label-floating">
						<label class="control-label">Banco</label>
						<input class="form-control" type="text" id="c_banco" name="c_banco" maxlength="10" required>
					</div>
					<div class="form-group col-md-12 col-12 label-floating">
						<label class="control-label">Sucursal</label>
						<input class="form-control" type="number" id="c_sucursal" name="c_sucursal" maxlength="10" required>
					</div>
				</div>




				<div class="col-md-6 col-12" id="responsable">
					<p class="lead">Datos del Responsable</p>


					<div class="form-group col-md-12 col-12 label-floating ">
						<label class="control-label">DNI</label>
						<input class="form-control" type="number" id="r_dni" name="r_dni" maxlength="9" required>
					</div>
					<div class="form-group col-md-12 col-12 label-floating">
						<label class="control-label">Cuil/t</label>
						<input class="form-control" type="number" id="r_cuil" name="r_cuil" maxlength="15" required>
					</div>
					<div class="form-group col-md-12 col-12 label-floating ">
						<label class="control-label">Apellido</label>
						<input class="form-control" type="text" id="r_apellido" name="r_apellido" maxlength="30" required>
					</div>
					<div class="form-group col-md-12 col-12 label-floating">
						<label class="control-label">Nombre</label>
						<input class="form-control" type="text" id="r_nombre" name="r_nombre" maxlength="30" required>
					</div>
					<div class="form-group col-md-12 col-12 ">
						<label class="control-label">Fecha Nacimiento</label>
						<input class="form-control" type="date" id="r_f_nac_s" name="r_f_nac_s">
					</div>
					<div class="form-group col-md-12 col-12">
						<label class="control-label">Sexo</label>
						<select name="r_sexo" id="r_sexo" class="form-control" required>
							<option value="null" selected></option>
							<option value="M">Masculino</option>
							<option value="F">Femenino</option>
						</select>
					</div>

					<div class="form-group col-md-12 col-12 label-floating ">
						<label class="control-label">Domicilio</label>
						<input class="form-control" type="text" id="r_domicilio" name="r_domicilio" maxlength="75" required>
					</div>
					<div class="form-group col-md-12 col-12 label-floating">
						<label class="control-label">Ciudad</label>
						<input class="form-control" type="text" id="r_ciudad " name="r_ciudad" maxlength="50" required>
					</div>
					<div class="form-group col-md-12 col-12 label-floating ">
						<label class="control-label">Codigo Postal</label>
						<input class="form-control" type="number" id="r_cpostal " name="r_cpostal" maxlength="4" required>
					</div>
					<div class="form-group col-md-12 col-12 label-floating">
						<label class="control-label">Numero de Celular</label>
						<input class="form-control" type="number" id=" r_celular" name="r_celular" maxlength="15" required>
					</div>
					<div class="form-group col-md-12 col-12 label-floating">
						<label class="control-label">Numero de Telefono</label>
						<input class="form-control" type="number" id=" r_telefono" name="r_telefono" maxlength="10" required>
					</div>
					<div class="form-group col-md-12 col-12 label-floating ">
						<label class="control-label">E-mail</label>
						<input class="form-control" type="text" id="r_email " name="r_email" maxlength="40" required>
					</div>

				</div>

				<div class="col-md-12">
					<p class="text-center">
						<button type="button" href="#!" class="btn btn-info btn-raised " id="btnGuardar"><i class="zmdi zmdi-floppy"></i> GUARDAR</button>
					</p>
				</div>
				</form>
			</div>
		</div>
		<!-- fin formulario -->
		</div>
	</section>
	<!--====== Scripts ==========-->
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
	<script src="./js/altasocio.js"></script>
</body>


</html>