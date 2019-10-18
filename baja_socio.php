<?php
//require_once('include/seguridad.php');
require_once('include/conexion.php');
if (isset($_GET['n'])) {

$sql = 'UPDATE socio SET estado_s="Baja" WHERE nro_socio='.$_GET['n'];

$result = $conexion->query($sql);

echo $result;
}


?>