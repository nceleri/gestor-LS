<?php

require_once "../modelos/Socio.php";

$socio = new Socio();



// PARA TABLA SOCIO
$nro_s = isset($_POST["nro_s"]) ? limpiarCadena($_POST["nro_s"]) : "";
$cuil_s = isset($_POST["cuil_s"]) ? limpiarCadena($_POST["cuil_s"]) : "";
$apellido_s = isset($_POST["apellido_s"]) ? limpiarCadena($_POST["apellido_s"]) : "";
$nombre_s = isset($_POST["nombre_s"]) ? limpiarCadena($_POST["nombre_s"]) : "";
$f_nac_s = isset($_POST["f_nac_s"]) ? limpiarCadena($_POST["f_nac_s"]) : "";
$sexo_s = isset($_POST["sexo_s"]) ? limpiarCadena($_POST["sexo_s"]) : "";

// PARA TABLA CONTACTO_SOCIO
$domicilio_s = isset($_POST["domicilio_s"]) ? limpiarCadena($_POST["domicilio_s"]) : "";
$ciudad_s = isset($_POST["ciudad_s"]) ? limpiarCadena($_POST["ciudad_s"]) : "";
$cpostal_s = isset($_POST["cpostal_s"]) ? limpiarCadena($_POST["cpostal_s"]) : "";
$nro_celular_s = isset($_POST["nro_celular_s"]) ? limpiarCadena($_POST["nro_celular_s"]) : "";
$nro_tel_fijo_s = isset($_POST["nro_tel_s"]) ? limpiarCadena($_POST["nro_tel_s"]) : "";
$email_s = isset($_POST["email_s"]) ? limpiarCadena($_POST["email_s"]) : "";


// PARA TABLA INFO_SOCIO

$obra_social_s = isset($_POST["obra_social_s"]) ? limpiarCadena($_POST["obra_social_s"]) : "";
$division_s = isset($_POST["division_s"]) ? limpiarCadena($_POST["division_s"]) : "";
$f_alta_s = isset($_POST["f_alta_s"]) ? limpiarCadena($_POST["f_alta_s"]) : "";
$fichadoUAR_s = isset($_POST["fichadoUAR_s"]) ? limpiarCadena($_POST["fichadoUAR_s"]) : "";
$carnet_s = isset($_POST["carnet_s"]) ? limpiarCadena($_POST["carnet_s"]) : "";
$ficha_s = isset($_POST["ficha_s"]) ? limpiarCadena($_POST["ficha_s"]) : "";
$becado = isset($_POST["becado_s"]) ? limpiarCadena($_POST["becado_s"]) : "no";
$medio_pago_s = isset($_POST["medio_de_pago"]) ? limpiarCadena($_POST["medio_de_pago"]) : "";
$categoria_s = isset($_POST["categoria_s"]) ? limpiarCadena($_POST["categoria_s"]) : "";


// SI EL MEDIO DE PAGO ES DEBITO, REGISTRAMOS LOS DATOS DEL PAPI QUE PONE LA TARASCA
$c_nombre = isset($_POST["c_nombre"]) ? limpiarCadena($_POST["c_nombre"]) : "";
$c_cuil = isset($_POST["c_cuil"]) ? limpiarCadena($_POST["c_cuil"]) : "";
$c_apellido = isset($_POST["c_apellido"]) ? limpiarCadena($_POST["c_apellido"]) : "";
$c_numerocuenta = isset($_POST["c_numerocuenta"]) ? limpiarCadena($_POST["c_numerocuenta"]) : "";
$c_cbu = isset($_POST["c_cbu"]) ? limpiarCadena($_POST["c_cbu"]) : "";
$c_banco = isset($_POST["c_banco"]) ? limpiarCadena($_POST["c_banco"]) : "";
$c_sucursal = isset($_POST["c_sucursal"]) ? limpiarCadena($_POST["c_sucursal"]) : "";
$c_tipo_cuenta = isset($_POST["tipo_cuenta_s"]) ? limpiarCadena($_POST["tipo_cuenta_s"]) : "";
//echo $c_nombre.$c_cuil.$c_apellido.$c_numerocuenta.$c_cbu.$c_banco.$c_sucursal;
//die();


// SI EL PIBE ES MENOR, REGISTRAMOS LOS DATOS DEL PADRE

$r_dni = isset($_POST["r_dni"]) ? limpiarCadena($_POST["r_dni"]) : "";
$r_cuil = isset($_POST["r_cuil"]) ? limpiarCadena($_POST["r_cuil"]) : "";
$r_apellido = isset($_POST["r_apellido"]) ? limpiarCadena($_POST["r_apellido"]) : "";
$r_nombre = isset($_POST["r_nombre"]) ? limpiarCadena($_POST["r_nombre"]) : "";
$r_f_nac_s = isset($_POST["r_f_nac_s"]) ? limpiarCadena($_POST["r_f_nac_s"]) : "";
$r_sexo = isset($_POST["r_sexo"]) ? limpiarCadena($_POST["r_sexo"]) : "";
$r_domicilio = isset($_POST["r_domicilio"]) ? limpiarCadena($_POST["r_domicilio"]) : "";
$r_ciudad = isset($_POST["r_ciudad"]) ? limpiarCadena($_POST["r_ciudad"]) : "";
$r_celular = isset($_POST["r_celular"]) ? limpiarCadena($_POST["r_celular"]) : "";
$r_telefono = isset($_POST["r_telefono"]) ? limpiarCadena($_POST["r_telefono"]) : "";
$r_email = isset($_POST["r_email"]) ? limpiarCadena($_POST["r_email"]) : "";
$r_cpostal = isset($_POST["r_cpostal"]) ? limpiarCadena($_POST["r_cpostal"]) : "";


//----------------------------------------------------------------------------//


switch ($_GET["op"]) {
	case 'guardaryeditar':
		if (!empty($nro_s)) {
			$Mensaje="";
			
			// TABLA SOCIO
			$socio->insertar_Socio($nro_s, $cuil_s, $apellido_s,$nombre_s,$f_nac_s, $sexo_s);
			// TABLA CONTACTO_SOCIO
			$socio->insertar_Contacto($nro_s, $domicilio_s, $ciudad_s, $cpostal_s, $nro_celular_s, $nro_tel_fijo_s, $email_s);
			// TABLA INFO_SOCIO
			$socio->insertar_Info($nro_s, $obra_social_s, $division_s, $f_alta_s, $fichadoUAR_s, $carnet_s, $ficha_s, $becado, $medio_pago_s, $categoria_s);
			// SI ALGUNA FALLA, CORTA LA EJECUCIÓN DE LO QUE SIGUE ACA ABAJO.

			// AHORA VEMOS SI ES MENOR PARA GUARDAR LOS DATOS DEL PADRE EN LA TABLA RESPONSABLE
			if ($categoria_s == "Menor") {
				// INSERTAMOS DATOS DEL PAPURRI
				$socio->insertar_Responsable($nro_s,$r_dni, $r_cuil, $r_apellido, $r_nombre, $r_f_nac_s, $r_sexo, $r_domicilio, $r_ciudad,$r_cpostal, $r_celular, $r_telefono, $r_email);
			}
			// SI PAGA CON DEBITO, REGISTRAMOS LA TARJETA
			if ($medio_pago_s == "Debito") {
				// GUARDAMOS LOS DATOS DE LA TARJETA JEJE
				$c_nombre = isset($_POST["c_nombre"]) ? limpiarCadena($_POST["c_nombre"]) : "";
				$c_cuil = isset($_POST["c_cuil"]) ? limpiarCadena($_POST["c_cuil"]) : "";
				$c_apellido = isset($_POST["c_apellido"]) ? limpiarCadena($_POST["c_apellido"]) : "";
				$c_numerocuenta = isset($_POST["c_numerocuenta"]) ? limpiarCadena($_POST["c_numerocuenta"]) : "";
				$c_cbu = isset($_POST["c_cbu"]) ? limpiarCadena($_POST["c_cbu"]) : "";
				$c_banco = isset($_POST["c_banco"]) ? limpiarCadena($_POST["c_banco"]) : "";
				$c_sucursal = isset($_POST["c_sucursal"]) ? limpiarCadena($_POST["c_sucursal"]) : "";

				$c_titular = $c_nombre.", ".$c_apellido;
				$socio->insertar_Cuenta($nro_s, $c_titular, $c_tipo_cuenta, $c_numerocuenta, $c_cbu, $c_banco, $c_sucursal);
			}else{
				// NO HACEMOS UN JORACA PORQUE PAGA CON EFECTIVO EL CHANTA
			}

		} else {

			$rspta = $socio->editar();

			echo $rspta ? "Socio actualizado" : "No se pudo actualizar el Socio";
		}
		break;

	case 'desactivar':
		$rspta = $socio->desactivar($nro_s);
		echo $rspta ? "Baja exitosa" : "No se pudo dar de baja";
		break;

	case 'activar':
		$rspta = $socio->activar($nro_s);
		echo $rspta ? "Alta exitosa" : "No se pudo dar de Alta";
		break;

	case 'mostrar':
		$rspta = $socio->mostrar($nro_s);
		//Codificar el resultado utilizando json
		echo json_encode($rspta);
		break;

	case 'listar':
		$rspta = $socio->listar();
		//Vamos a declarar un array
		$data = array();


		while ($reg = $rspta->fetch_object()) {
			$data[] = array(
				"0" => $reg->id_socio,
				"1" => $reg->apellido,
				"2" => $reg->nombre,
				"3" => $reg->sexo,
				"4" => $reg->ciudad,
				"5" => $reg->email,
				"6" => $reg->estado,
				"7" => $reg->celular,
				"8" => '<a target="_blank" onclick="abrir(' . $reg->id_socio . ')");return false;"><i class="zmdi zmdi-open-in-new"></i></a>   <a href="editar_socio?n=' . $reg->id_socio . '" target="_blank" <i class="zmdi zmdi-edit"></i></a>  
 				<a onclick="eliminacion(' . $reg->id_socio . ')"<i class="zmdi zmdi-long-arrow-down"></i></a> <a onclick="activar(' . $reg->id_socio . ')"><i class="zmdi zmdi-long-arrow-up"></i></a>'

			);
		}
		$results = array(
			"sEcho" => 1, //Información para el datatables
			"iTotalRecords" => count($data), //enviamos el total registros al datatable
			"iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
			"aaData" => $data
		);
		echo json_encode($results);

		break;
}
