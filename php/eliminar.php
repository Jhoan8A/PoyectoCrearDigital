

<?php 
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM materias WHERE id='$id'";
	
	$resultado=$con->query($query);

	if($query!=null){
				print "<script>alert(\"Eliminacion exitosa.\");window.location='../borrarmaterias.php';</script>";
			}
	mysql_close($con);
?>

