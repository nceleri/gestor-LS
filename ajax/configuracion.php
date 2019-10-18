<?php
session_start();

if (isset($_SESSION['loggedin'])) {
	if ($_SESSION['loggedin'] != true) {
	die("No tienes acceso");
	}
}else{
	die("No tienes acceso");
}

require_once "../modelos/Configuracion.php";

$Configuracion = new Configuracion();

$cuota_menor = isset($_POST["cuota_menor"]) ? limpiarCadena($_POST["cuota_menor"]) : "";
$cuota_mayor = isset($_POST["cuota_mayor"]) ? limpiarCadena($_POST["cuota_mayor"]) : "";
$descuento_becado = isset($_POST["descuento_becado"]) ? limpiarCadena($_POST["descuento_becado"]) : "";


switch ($_GET['op']) {
	case 'update':
		$Configuracion->setPrecioCuotaMenor($cuota_menor);
		$Configuracion->setPrecioCuotaMayor($cuota_mayor);
		$Configuracion->setDescuentoBecado($descuento_becado);
		break;
	
	default:
		# code...
		break;
}


?>