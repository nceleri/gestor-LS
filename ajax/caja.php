<?php
require_once "../modelos/Caja.php";

$Caja = new Caja();
$now = date('Y-m-d');

$monto = isset($_POST["monto"]) ? limpiarCadena($_POST["monto"]) : "";
$concepto = isset($_POST["detalle"]) ? limpiarCadena($_POST["detalle"]) : "";


switch ($_GET["op"]) {
	case 'nuevoingreso':
		$Caja::CargarIngreso($monto, $concepto);
		break;
	case 'nuevoegreso':
		$Caja::CargarEgreso($monto, $concepto);
		break;
	case 'veringresos':
		$Caja::mostrarMisIngresos($now);
		break;

	case 'veregresos':
		$Caja::mostrarMisEgresos($now);
		break;

	default: 
		echo "No hay parámetros";
}

?>
