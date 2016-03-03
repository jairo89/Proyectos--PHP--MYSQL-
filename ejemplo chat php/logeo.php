<?php
include "conexion.php";
$user= $_POST['user'];
$pass= $_POST['pass'];
$sql = "SELECT * FROM `users` WHERE `user`= '$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["user"]. " pass " . $row["pass"]. "<br>";
    session_start();
    $_SESSION["user"]=$row["user"];
    echo  $_SESSION["user"];
    header("Location: index.php");
    }
} else {
    echo "0 results";
}
?>
