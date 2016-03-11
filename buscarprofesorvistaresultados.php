<html>
	<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Obtener todas las  Materias por profesor</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
			<?php 
			 include "php/buscarprofesor.php";
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
					 
					while($rows = mysql_num_rows($resultado);
							for ($j = 0 ; $j < $rows ; ++$j)
							{ ?>
						<tr>
							<td><?php echo 'Materia: ' . mysql_result($resultado,$j,'nombreMateria');?>
							</td>
							<td>
								<?php echo 'Profesor: ' . mysql_result($resultado,$j,'profesor');?>
							</td>
							<td>
								<?php echo 'Des: ' . mysql_result($resultado,$j,'profesor');?>
							</td>
							<td>
								<?php echo 'Profesor: ' . mysql_result($resultado,$j,'profesor');?>
							</td>
							<td>
							<button type="submit" class="btn btn-default"><a href="modificarMateriaobtenida.php?id=<?php echo $row['id'];?>">Inscribirse</a></button>
								
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
	
