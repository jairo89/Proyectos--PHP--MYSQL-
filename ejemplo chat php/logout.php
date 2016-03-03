<?php
session_start();
include "conexion.php";
if(isset($_SESSION['user']))
{
session_destroy();
	header("Location: login.php");
	
}else{
	echo"Error!!";
}
?>