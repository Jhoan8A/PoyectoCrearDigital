<?php

session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

require ('php/conexion.php');
	$query="SELECT id, nombreMateria, profesor, descripcion, cupos FROM materias  ";
	
	$resultado=$con->query($query);
//mysql_close($con);

?>
