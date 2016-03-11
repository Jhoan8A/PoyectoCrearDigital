<?php session_start(); ?>
	
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


<!--<form role="form" name="profesor" action="buscarprofesor1.php" method="post">
		  <div class="form-group">
		    <label for="profesor">Profesor</label>
		    <input type="text" class="form-control" id="profesor" name="profesor" placeholder="Nombre del profesor a buscar">
		  </div>
		 
		  <button type="submit" class="btn btn-default">buscar por profesor</button>

		</form>
	-->

		<form role="form" name="login" action="buscarprofesor1.php" method="post">
		  <div class="form-group">
		    <label for="profesor">Nombre de usuario o email</label>
		    <input type="text" class="form-control" id="profesor" name="profesor" placeholder="Nombre del profesor a buscar">
		  </div>
		

		  <button type="submit" class="btn btn-default">Buscar</button>
		</form>
					</div>
			</div>
			</div>
		</body>
	</html>	
