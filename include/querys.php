<?php
require_once('conexion.php');
$now = date('Y-m-d');


function totalSocios(){
	
	global $conexion;
	$sql = "SELECT COUNT(*) total FROM socio";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	echo $row['total'];

}

function totalSociosBaja(){
	global $conexion;
	$sql = "SELECT COUNT(*) total FROM info_socio WHERE estado='Baja'";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	echo $row['total'];
}


function IngresosMes(){
	$month = date('m');
	global $conexion;
	$sql = "SELECT sum(monto) total from caja_ingreso i, caja c WHERE c.id_caja = i.id_caja and c.fecha LIKE '%-$month-%';";
	$e = $conexion->query($sql);
	$fila = $e->fetch_assoc();
	echo $fila['total'];
}	

function EgresosMes(){

}


?>