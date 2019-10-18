<?php
require_once("../include/conexion.php");

Class Configuracion{

	public function __construct()
	{

	}

	public function setPrecioCuotaMenor($i)
	{
		global $conexion;
		$q = "UPDATE configuraciones SET cuota_menor='$i'";	
		$e = $conexion->query($q);

		if ($e) {
			echo "1";
		}else{
			echo "0";
		}
		
	}

	public function setPrecioCuotaMayor($i)
	{
		global $conexion;
		$q = "UPDATE configuraciones SET cuota_mayor='$i'";	
		$e = $conexion->query($q);
		if ($e) {
			echo "1";
		}else{
			echo "0";
		}
	}

	public function setDescuentoBecado($i)
	{
		global $conexion;
		$q = "UPDATE configuraciones SET descuento_becado='$i'";	
		$e = $conexion->query($q);
		if ($e) {
			echo "1";
		}else{
			echo "1";
		}
	}

		public function getPrecioCuotaMenor()
	{
		global $conexion;
		$q = "SELECT cuota_menor FROM configuraciones WHERe id_unica_configuracion=1";
		$e = $conexion->query($q);
		$fila = $e->fetch_assoc();
		echo $fila['cuota_menor'];	
	}

	public function getPrecioCuotaMayor()
	{
		global $conexion;
		$q = "SELECT cuota_mayor FROM configuraciones WHERe id_unica_configuracion=1";	
		$e = $conexion->query($q);
		$fila = $e->fetch_assoc();
		echo $fila['cuota_mayor'];	
	}

	public function getDescuentoBecado()
	{
		global $conexion;
		$q = "SELECT descuento_becado FROM configuraciones WHERe id_unica_configuracion=1";
		$e = $conexion->query($q);	
		$fila = $e->fetch_assoc();
		echo $fila['descuento_becado'];	
	}
}


?>