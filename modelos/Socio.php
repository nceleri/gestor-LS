<?php
session_start();
if (isset($_SESSION['loggedin'])) {
	if ($_SESSION['loggedin'] != true) {
	die("No tienes acceso");
	}
}else{
	die("No tienes acceso");
}
//Incluímos inicialmente la conexión a la base de datos
require_once("../include/conexion.php");

Class Socio
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar_Socio($nro_s, $cuil_s, $apellido_s,$nombre_s,$f_nac_s,$sexo_s)
	{
		global $conexion;
		$sql="INSERT INTO socio values ('$nro_s', '$nombre_s', '$apellido_s', '$cuil_s', '$f_nac_s','$sexo_s');";
		$e = $conexion->query($sql);
		if ($e) {
		}else{
			die ("Ocurrió un error al registrar el socio. Puede que el socio ya exista.");
		}
	}

	public function insertar_Contacto($nro_s, $domicilio_s, $ciudad_s, $cpostal_s, $nro_celular_s, $nro_tel_fijo_s,$email_s)
	{
		global $conexion;
		$sql="INSERT INTO contacto_socio values ('$nro_s','$domicilio_s', '$ciudad_s', '$cpostal_s', '$nro_celular_s','$nro_tel_fijo_s','$email_s')";
		$e = $conexion->query($sql);
		if ($e) {
			echo "Socio registrado, datos de contacto registrados";
		}else{
			die ("Error: no se pudieron cargar los datos de contacto".$sql);
		}
	}

	public function insertar_Info($nro_s, $obra_social_s, $division_s, $f_alta_s, $fichadoUAR_s, $carnet_s, $ficha_s, $becado, $medio_pago_s, $categoria_s)
	{
		global $conexion;
		$sql="INSERT INTO info_socio values ('$nro_s','$obra_social_s', '$division_s', '$f_alta_s', '$fichadoUAR_s','$carnet_s','$ficha_s','$becado','$medio_pago_s','Alta', '$categoria_s')";
		$e = $conexion->query($sql);
		if ($e) {
		}else{
			die ("Error: no se pudieron cargar los datos de información general. Esta es la consulta ejecutada: ".$sql);
		}
	}
	
	public function insertar_Responsable($nro_s,$r_dni,$r_cuil, $r_apellido, $r_nombre, $r_f_nac_s, $r_sexo, $r_domicilio, $r_ciudad,$r_cpostal, $r_celular, $r_telefono, $r_email)
	{
		global $conexion;
		$sql="INSERT INTO responsable values ('$nro_s','$r_dni','$r_cuil','$r_apellido', '$r_nombre', '$r_f_nac_s', '$r_sexo','$r_domicilio','$r_ciudad','$r_cpostal','$r_celular','$r_telefono','$r_email')";
		$e = $conexion->query($sql);
		if ($e) {
			echo "Socio registrado, datos de contacto registrados, datos generales registrados, responsable registrado"; 
		}else{
			die ("Error: no se pudo registrar al tutor del socio. La consulta ejecutada fue: ".$sql);
		}
	}
	
	public function insertar_Cuenta($nro_s, $c_titular, $c_tipo_cuenta, $c_numerocuenta, $c_cbu, $c_banco, $c_sucursal)
	{
		global $conexion;
		$sql="INSERT INTO cuenta_socio values ('$nro_s','$c_titular', '$c_tipo_cuenta','$c_numerocuenta', '$c_cbu','$c_banco','$c_sucursal')";
		$e = $conexion->query($sql);
		if ($e) {
			echo "Socio registrado, datos de contacto registrados, datos generales registrados, responsable registrado. Cuenta de débito automático registrado";
		}else{
			die ("Error: no se pudo registrar al tutor del socio. La consulta ejecutada fue: ".$sql);
		}
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idregistro)
	{
		$sql="SELECT * FROM socio WHERE nro_socio='$idregistro'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="select s.id_socio,s.nombre,s.apellido,s.sexo, i.estado,c.ciudad,c.email,c.celular from socio s, info_socio i, contacto_socio c where s.id_socio = i.id_socio and i.id_socio = c.id_socio;";
		return ejecutarConsulta($sql);		
	}

	public function baja($id){
		$sql="UPDATE socio SET estado_s='Baja' WHERE nro_socio=".$id;
	}
	//Implementar un método para listar los registros y mostrar en el select

}


?>