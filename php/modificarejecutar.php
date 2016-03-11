<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$nombreMateria=$_POST['nombreMateria'];
	$profesor=$_POST['profesor'];
	$descripcion=$_POST['descripcion'];
	$cupos=$_POST['cupos'];
	
	$query="UPDATE materias SET nombreMateria='$nombreMateria', profesor='$profesor', descripcion='$descripcion', cupos='$cupos' WHERE id='$id'";
	
	$resultado=$con->query($query);

	if($query!=null){
				print "<script>alert(\"Modificacion exitosa.\");window.location='../modificarmaterias.php';</script>";
			}
	mysql_close($con);
?>

