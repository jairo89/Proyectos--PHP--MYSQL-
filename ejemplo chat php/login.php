<?php
session_start();
include "conexion.php";
if(isset($_SESSION['user']))
{
	?>
	Hola <?php $_SESSION['user'] ?>ya has iniciado sesion<a href="logout.php">Cerrar Session </a>
	<?php
}
else{
	?>
	<table width="300">
	<form method="post" action="logeo.php">
		<tr>
			<td>User:</td>
			<td><input type="text" name="user"/></td>
		</tr>
		<tr>
			<td>Pass:</td>
			<td><input type="password" name="pass"> </td>
		</tr>
		<tr>
			<td colspan="2">
				<input align="center" type="submit" name="enviar" value="Acceder">
			</td>
		</tr>
	</form>
	 </table>
	 <?php
}
?>