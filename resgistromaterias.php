
<html>
	<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Formulario de Registro de Materias</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php 
	include "php/comprobadorqueestelogueado.php";
	include "php/navbar1.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Registro de Materias</h2>

		<form role="form" name="registromaterias" action="php/registromaterias.php" method="post">
		  <div class="form-group">
		    <label for="nombreMateria">Nombre de la Materia</label>
		    <input type="text" class="form-control" id="nombreMateria" name="nombreMateria" placeholder="Nombre de la Materia">
		  </div>
		  <div class="form-group">
		    <label for="profesor">Profesor</label>
		    <input type="text" class="form-control" id="profesor" name="profesor" placeholder="Profesor">
		  </div>
		  <div class="form-group">
		    <label for="descripcion">Descripcion</label>
		    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion">
		  </div>
		  <div class="form-group">
		    <label for="cupos">Cupos</label>
		    <input type="text" class="form-control" id="cupos" name="cupos" placeholder="cupos">
		  </div>
		  <button type="submit" class="btn btn-default">Registrar Materia</button>

		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_registro_materias.js"></script>
	</body>
</html>