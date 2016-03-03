<?php
session_start();
include "conexion.php";
if(isset($_POST['enviar']))
{
$user=$_SESSION['user'];
$mensaje=$_POST['mensaje'];
$sql = "INSERT INTO `chat` VALUES ('','$user','$mensaje')";
$result = $conn->query($sql);
header('location:index.php');
}else{
	echo'ERRORRR';
}

?>