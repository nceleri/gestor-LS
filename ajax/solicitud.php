<?php
require_once "../modelos/Socio.php";

$socio = new Socio();


switch ($_GET["op"]) {
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
