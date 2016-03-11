<?php
	
	require('php/conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT nombreMateria, profesor, descripcion, cupos FROM materias WHERE id='$id'";
	
	$resultado=$con->query($query);
	
	$row=$resultado->fetch_assoc();
	mysql_close($con);
?>