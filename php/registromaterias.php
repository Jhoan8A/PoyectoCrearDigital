<?php 
	
	require('conexion.php');
	
	$nombreMateria=$_POST['nombreMateria'];
	$profesor=$_POST['profesor'];
	$descripcion=$_POST['descripcion'];
	$cupos=$_POST['cupos'];
	
	$query="INSERT INTO materias (nombreMateria, profesor, descripcion, cupos) VALUES ('$nombreMateria','$profesor','$descripcion','$cupos')";
	
	$resultado=$con->query($query);
	if($query!=null){
				print "<script>alert(\"Registro exitoso.\");window.location='../resgistromaterias.php';</script>";
			}
	

mysql_close($con);

?>

