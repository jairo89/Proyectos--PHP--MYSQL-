<?php
session_start();
include "conexion.php";
if(isset($_SESSION['user']))
{	$sql = "SELECT * FROM `chat`";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
    // output data of each row
    	while($row = $result->fetch_assoc()) {
        echo  " - User: " . $row["user"]. " Dice " . $row["mensaje"]. "<br>";
     	}
	}   else
	{
	echo"ERORRRRR";
	}
}else{
?>
<strong>NO AHY USUARIO </strong>

<?php
}
header('refresh:2;mensaje.php')
?>
