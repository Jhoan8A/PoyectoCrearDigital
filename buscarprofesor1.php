<?php

session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

if(isset($_POST["profesor"])){
		
			//include "conexion.php";
$db_server = mysql_connect('localhost', 'root', '');
if (!$db_server) die("No se puede conectar con MySQL: " . mysql_error());
mysql_select_db('electivas')
or die("No se encuentra la base de datos: " . mysql_error());


			$query = "SELECT * FROM materias  where profesor=\"$_POST[profesor]\"";
$resultado = mysql_query($query);
if (!$resultado) die("Ha fallado el acceso a la base de datos: " . mysql_error());
//print "<script>alert(\"Profesor encontrado.\");window.location='../buscarprofesorvistaresultados.php';</script>";

$rows = mysql_num_rows($resultado);
for ($j = 0 ; $j < $rows ; ++$j)
{
?>

<html>
	<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Obtener todas las  Materias por profesor</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
			<?php 
			 //include "php/buscarprofesor.php";
			 include "php/navbar2.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-8">

	<table class="table">
			<thead>
				<tr>
					<th>Nombre de la Materia</th>
					<th>Profesor</th>
					<th>Descripcion</th>
					<th>Cupos</th>
				</tr>
				<tbody>
					<?php 
					 
					$rows = mysql_num_rows($resultado);
							for ($j = 0 ; $j < $rows ; ++$j)
							{ ?>
						<tr>
							<td><?php echo 'Materia: ' . mysql_result($resultado,$j,'nombreMateria');?>
							</td>
							<td>
								<?php echo 'Profesor: ' . mysql_result($resultado,$j,'profesor');?>
							</td>
							<td>
								<?php echo 'Descripcion: ' . mysql_result($resultado,$j,'descripcion');?>
							</td>
							<td>
								<?php echo 'Cupos: ' . mysql_result($resultado,$j,'cupos');?>
							</td>
							<td>
							<button type="submit" class="btn btn-default"><a href="modificarMateriaobtenida.php?id=<?php echo ' ' . mysql_result($resultado,$j,'cupos');?>">Inscribirse</a></button>
								
							</td>
							
						</tr>
					<?php } ?>
				</tbody>
			</table>
					</div>
			</div>
			</div>
		</body>
	</html>	
			<?php


	

} 
			
			
	
mysql_close($db_server);


	
	}
?>






			