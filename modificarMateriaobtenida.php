

<html>
	<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Obtener datos segun id</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
<?php include "php/modificarmateriaobtenida.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h1>Modificar Materia</h1>
		
		<form role="form" name="modificarmateria" method="POST" action="php/modificarejecutar.php">
	
		   
		  <div class="form-group">
		  <input type="hidden" name="id" value="<?php echo $id; ?>">  
		    <label for="fullname">Nombre de la Materia</label>
		    <input type="text" name="nombreMateria"  value="<?php echo $row['nombreMateria']; ?>" />
		  </div>
		  <div class="form-group">
		    <label for="email">Profesor</label>
		    <input type="text" name="profesor"  value="<?php echo $row['profesor']; ?>" />
		  </div>
		  <div class="form-group">
		    <label for="password">Descripcion</label>
		    <input type="text" name="descripcion"  value="<?php echo $row['descripcion']; ?>" />
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Cupos</label>
		    <input type="text" name="cupos"  value="<?php echo $row['cupos']; ?>" />
		  </div>
		  <button type="submit" class="btn btn-default">Modificar Materia</button>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_modificacion.js"></script>
	</body>
</html>	
