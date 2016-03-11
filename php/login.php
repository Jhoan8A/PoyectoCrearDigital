<?php

if(!empty($_POST)){
	if(isset($_POST["nombreUsuario"]) &&isset($_POST["pw"])){
		if($_POST["nombreUsuario"]!=""&&$_POST["pw"]!=""){
			include "conexion.php";
			
			$user_id=null;
			$sql1= "select * from usuarios where (nombreUsuario=\"$_POST[nombreUsuario]\" or email=\"$_POST[nombreUsuario]\") and pw=\"$_POST[pw]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id"];
				$categoria=$r["categoria"];
				break;
			}
			echo "id";
			if($user_id==null ){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
			}elseif($categoria=="Administrador"){
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../home.php';</script>";				
			}
			elseif($categoria=="Estudiante"){
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../home1.php';</script>";				
			}
		}
	}
}


//mysql_close($con);
?>