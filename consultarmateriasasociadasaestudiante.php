<?php

session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}
	$con=mysql_connect('localhost','root','');
 mysql_select_db('electivas',$con);
	

	$consulta_mysql="SELECT 
   u.nombreUsuario usuario, 
   m.nombreMateria materia 
FROM inscribirse um
INNER JOIN usuarios u ON um.id_materia =  u.id
INNER JOIN materias m ON um.id_estudiante =  m.id";
	 $resultado_consulta_mysql=mysql_query($consulta_mysql,$con);
  
 //  Navegamos cada fila que devuelve la consulta mysql y la imprimimos en pantalla
 while($fila=mysql_fetch_array($resultado_consulta_mysql)){
  echo "El servicio ".$fila['nombreUsuario']." es ofrecido por la empresa ".$fila['nombreMateria'];
 }
	
	?>