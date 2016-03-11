<?php session_start(); ?>
<html>
	<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Registro</h2>

		<form role="form" name="registro" action="php/registro.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre de usuario</label>
		    <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="fullname">Nombre Completo</label>
		    <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto" placeholder="Nombre Completo">
		  </div>
		  <div class="form-group">
		    <label for="email">Correo Electronico</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="pw" name="pw" placeholder="Contrase&ntilde;a">
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="confirm_pw" name="confirm_pw" placeholder="Confirmar Contrase&ntilde;a">
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Categoria</label>
		    <!--<input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria">-->
			<select name="categoria">
				
			<option value="Estudiante">Estudiante</option>
			<option value="Administrador">Administrador</option>


			</select>	  
		  </div>

		  <button type="submit" class="btn btn-default">Registrar</button>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_registro.js"></script>
	</body>
</html>