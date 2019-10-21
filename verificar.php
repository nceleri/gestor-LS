<?php
session_start();

include('include/conexion.php');
$mensaje ="";

$username = limpiarCadena($_POST['usuario']); //usuario
$password = limpiarCadena($_POST['contraseña']); // contraseña 


 
$sql = "SELECT * FROM admin WHERE usuario='$username' and clave='$password'";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {   
	 $row = $result->fetch_array(MYSQLI_ASSOC); 
	    $_SESSION['loggedin'] = true;
	    $_SESSION['login_user'] = $row['usuario'];
	    header('Location: http://localhost/gestor-LS-master'); 
}else{
  header('Location: http://localhost/gestor-LS-master/login.php?error=1');
}
      
 mysqli_close($conexion); 


 ?>
