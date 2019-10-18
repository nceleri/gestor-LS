<?php
if (isset($_GET['error'])) {

	$errormsg = '<div class="alert alert-danger" role="alert">
    Datos incorrectos
    </div>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Ingreso al Sistema</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-4.1/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/css/util.css">
	<link rel="stylesheet" type="text/css" href="css/css/main.css">
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
	<!--===============================================================================================-->
</head>

<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/logimg.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form method="post" action="verificar.php" class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Ingreso
					</span>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Nombre de Usuario</span>
						<input class="input100" type="text" name="usuario" placeholder="Nombre de Usuario...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="Password" name="contraseña" placeholder="*************">
						<span class="focus-input100"></span>
					</div>
					<?php
					if (isset($errormsg)) {
						echo $errormsg;
					}
					?>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Ingresar
							</button>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>


	<script src="js/main.js"></script>



</body>

</html>