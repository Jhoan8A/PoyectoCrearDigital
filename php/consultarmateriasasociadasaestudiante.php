<?php

session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

	mysql_select_db('electivas',$con);

	$consulta_mysql="select materias.nombreMateria,usuarios.nombreUsuario
	                    from inscribirse
	                        inner join usuarios on materias.id=usuarios.idmaterias";
	$resultado=mysql_query($consulta_mysql,$con);
	 
	//  Navegamos cada fila que devuelve la consulta mysql y la imprimimos en pantalla
	while($fila=mysql_fetch_array($resultado)){
	 echo "El servicio ".$fila['nombreUsuario']." es ofrecido por la empresa ".$fila['nombreMateria'];
	}
	
	mysql_close($con);
	?>