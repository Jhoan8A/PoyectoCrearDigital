<?php
$host="localhost";
$user="root";
$password="";
$db="electivas";
$con = new mysqli($host,$user,$password,$db);
if ($con->connect_errno)
{
       echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
       exit();
}
?>