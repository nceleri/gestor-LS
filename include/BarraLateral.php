<!-- SideBar -->
<section class="full-box cover dashboard-sideBar">
	<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
	<div class="full-box dashboard-sideBar-ct">
		<!--SideBar Title -->
		<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
			La Salle Jobson<i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
		</div>
		<!-- SideBar User info -->
		<div class="full-box dashboard-sideBar-UserInfo">
			<figure class="full-box">
				<img src="./assets/img/barralateralfondo.png" alt="UserIcon">
				<figcaption class="text-center text-titles"></figcaption>
			</figure>
			<ul class="full-box list-unstyled text-center">
				<li>
					<a>
						<i style="text-decoration: none; text-shadow: none;">
							<?php
							// MOSTRAMOS EL NOMBRE DEL USUARIO LOGUEADO
							echo "Bienvenido, " . $_SESSION['login_user'];

							?>

						</i>
					</a>
				</li>
			</ul>
		</div>
		<!-- SideBar Menu -->
		<ul class="list-unstyled full-box dashboard-sideBar-Menu">
			<li>
				<a href="index.php">
					<i class="zmdi zmdi-network"></i> Estadisticas
				</a>
			</li>
			<li>
				<a href="#!" class="btn-sideBar-SubMenu">
					<i class="zmdi zmdi-calendar-note"></i> Gestion socios <i class="zmdi zmdi-caret-down pull-right"></i>
				</a>
				<ul class="list-unstyled full-box">
					<li>
						<a href="nuevo_socio.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Alta socio
						</a>
					</li>
					<li>
						<a href="consulta_socio.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Buscar / modificar</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#!" class="btn-sideBar-SubMenu">
					<i class="zmdi zmdi-accounts-alt"></i> Grupos familiares
				</a>
			<li>
				<a href="#!" class="btn-sideBar-SubMenu">
					<i class="zmdi zmdi-money"></i> Cobro de cuota <i class="zmdi zmdi-caret-down pull-right"></i>
				</a>
				<ul class="list-unstyled full-box">
					<li>
						<a href="registrar_pago.php"><i class="zmdi zmdi-edit"></i> Registrar pago</a>
					</li>
					<li>
						<a href="genera_DA.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Generar archivo DA</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#!" class="btn-sideBar-SubMenu">
					<i class="zmdi zmdi-balance"></i> Control de caja <i class="zmdi zmdi-caret-down pull-right"></i>
				</a>
				<ul class="list-unstyled full-box">
					<li>
						<a href="registrar_pago.php"><i class="zmdi zmdi-check"></i> Ingresos/Egresos</a>
					</li>
					<li>
						<a href="resumen_caja_fecha.php"><i class="zmdi zmdi-close-circle"></i> Caja por fecha</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#!" class="btn-sideBar-SubMenu">
					<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Ajustes <i class="zmdi zmdi-caret-down pull-right"></i>
				</a>
				<ul class="list-unstyled full-box">
					<li>
						<a href="config.php"><i class="zmdi zmdi-settings-square"></i> Variables</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="logout.php" class="btn-sideBar-SubMenu">
					<i class="zmdi zmdi-close-circle"></i> Cerrar sesión
				</a>
			</li>
		</ul>
	</div>
</section>