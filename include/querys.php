<?php
require_once('conexion.php');

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

?>