<?php

if(!empty($_POST)){
	if(isset($_POST["nombreUsuario"]) &&isset($_POST["nombreCompleto"]) &&isset($_POST["email"]) &&isset($_POST["pw"]) &&isset($_POST["confirm_pw"]) &&isset($_POST["categoria"])){
		if($_POST["nombreUsuario"]!=""&& $_POST["nombreCompleto"]!=""&&$_POST["email"]!=""&&$_POST["pw"]!=""&&$_POST["pw"]==$_POST["confirm_pw"] && $_POST["categoria"]!=""){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from usuarios where nombreUsuario=\"$_POST[nombreUsuario]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.php';</script>";
			}
			$sql = "insert into usuarios (nombreUsuario,nombreCompleto,email,pw,categoria,created_at) value (\"$_POST[nombreUsuario]\",\"$_POST[nombreCompleto]\",\"$_POST[email]\",\"$_POST[pw]\",\"$_POST[categoria]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../login.php';</script>";
			}
		}
	}
}

mysql_close($con);

?>