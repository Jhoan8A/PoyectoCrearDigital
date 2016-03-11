
<html>
	<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Modificar Materias</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
			<?php 
			 include "php/obtenertodaslasmaterias.php";
			 include "php/navbar1.php"; ?>
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
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['nombreMateria'];?>
							</td>
							<td>
								<?php echo $row['profesor'];?>
							</td>
							<td>
								<?php echo $row['descripcion'];?>
							</td>
							<td>
								<?php echo $row['cupos'];?>
							</td>
							<td>
							<button type="submit" class="btn btn-default"><a href="modificarMateriaobtenida.php?id=<?php echo $row['id'];?>">Modificar</a></button>
								
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
	
