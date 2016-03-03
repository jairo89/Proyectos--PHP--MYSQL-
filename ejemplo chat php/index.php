<?php
session_start();
include "conexion.php";
if(isset($_SESSION['user']))
{

	?>
		<table width ="800" height="500">
			<form method="post" action="enviarchat.php">
			<tr>
			<td><iframe src="mensaje.php" name  ="iframe" width="700" height="400"></iframe>
			</td>
			</tr>
			<tr>	
			<td><input type="text" name="mensaje"/>
			<button type="submit" name="enviar">Enviar mensaje</button>
			</td>
			</tr>
			<tr>
			<td>
			Estas conectado como<strong><i><?php echo " ".$_SESSION["user"]; ?></i></strong><br>
			<strong>Si desea salir </strong><a href="logout.php">Cerrar Session </a>	
			</td>
			</tr>
			</form>
			</table>
			
<?php
}else{
	?>
	Debes Inicializar seccion para poder usar el chat <a href="login.php">Click aqui</a>
	<?php
}
	?>	
