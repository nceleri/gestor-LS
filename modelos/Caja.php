<?php 
require '../include/conexion.php';

Class Caja{

	public function __construct()
	{

	}

	public static function mostrarMisEgresos($fecha)
	{
		global $conexion;
		$q = "SELECT e.concepto, e.monto, e.id_caja FROM caja c, caja_egreso e WHERE c.id_caja = e.id_caja AND c.fecha = '$fecha'";
		$e = $conexion->query($q);
		$cnt = $e->num_rows;
		
		if ($e) {
			if ($cnt > 0) {
				$total = 0;
				while ($fila = $e->fetch_assoc()) {
				echo '		
				<tr class="table-info">
					<th scope="row">-</th>
					<td>'.$fila['concepto'].'</td>
					<td>'.$fila['monto'].'</td>
				</tr>';
				$total = $total+$fila['monto'];
				}
				echo '		
				<tr class="table-info">
					<th scope="row">TOTAL</th>
					<td></td><td style="color:red"><b>'.$total.'</b></td></tr>';

			}else{
				echo 'No hay ingresos cargados para la fecha';
			}
		}else{
			echo "Error en la query: ".$q;
		}

		
	}

	public static function mostrarMisIngresos($fecha)
	{
		global $conexion;
		$q = "SELECT i.concepto, i.monto, i.id_caja FROM caja c, caja_ingreso i WHERE c.id_caja = i.id_caja AND c.fecha = '$fecha'";
		$i = $conexion->query($q);
		$cnt = $i->num_rows;
		
		if ($i) {
			if ($cnt > 0) {
				$total = 0;
				while ($fila = $i->fetch_assoc()) {
				echo '		
				<tr class="table-info">
					<th scope="row">-</th>
					<td>'.$fila['concepto'].'</td>
					<td>'.$fila['monto'].'</td>
				</tr>';
				$total = $total+$fila['monto'];
				}
				echo '		
				<tr class="table-info">
					<th scope="row">TOTAL</th>
					<td></td><td style="color:green"><b>'.$total.'</b></td></tr>';

			}else{
				echo 'No hay ingresos cargados para la fecha';
			}
		}else{
			echo "Error en la query: ".$q;
		}

	}


	public static function CargarIngreso($monto, $concepto)
	{
		global $conexion;
		$now = date('Y-m-d');
		// verificamos si hay una caja creada para hoy
		$consultar = "SELECT id_caja FROM caja WHERE fecha = '$now'";
		$e = $conexion->query($consultar);

		if ($e->num_rows<1) {
			// ACA CREAMOS UNA CAJA PORQUE NO HAY
			$creacionCajahoy = $conexion->query("INSERT INTO caja (fecha) values ('$now')");
		}

		// VOLVEMOS A CONSULTAR PORQUE TENEMOS QUE OBTENER EL ID
		$Traerid = "SELECT id_caja FROM caja WHERE fecha = '$now'";
		$res = $conexion->query($consultar);
		$fila = $res->fetch_assoc();

		$id_caja_existente = $fila['id_caja'];

		$NuevoIngreso = "INSERT INTO caja_ingreso (monto, concepto, id_caja)  values ('$monto', '$concepto', '$id_caja_existente') ";
		$ejecutar = $conexion->query($NuevoIngreso);

		if ($ejecutar) {
			echo "1";
		}else{
			echo "error";
		}
		
	}

	public static function CargarEgreso($monto, $concepto)
	{
		global $conexion;
		$now = date('Y-m-d');
		// verificamos si hay una caja creada para hoy
		$consultar = "SELECT id_caja FROM caja WHERE fecha = '$now'";
		$e = $conexion->query($consultar);

		if ($e->num_rows<1) {
			// ACA CREAMOS UNA CAJA PORQUE NO HAY
			$creacionCajahoy = $conexion->query("INSERT INTO caja (fecha) values ('$now')");
		}

		// VOLVEMOS A CONSULTAR PORQUE TENEMOS QUE OBTENER EL ID
		$Traerid = "SELECT id_caja FROM caja WHERE fecha = '$now'";
		$res = $conexion->query($consultar);
		$fila = $res->fetch_assoc();

		$id_caja_existente = $fila['id_caja'];

		$NuevoEgreso = "INSERT INTO caja_egreso (monto, concepto, id_caja)  values ('$monto', '$concepto', '$id_caja_existente') ";
		$ejecutar = $conexion->query($NuevoEgreso);

		if ($ejecutar) {
			echo "1";
		}else{
			echo "error";
		}
		
	}
}

?>