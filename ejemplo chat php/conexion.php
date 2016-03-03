<?php
//$conex=mysql_connect("localhost","root");
//$db=mysql_select_db("ejemplo_chat");
$conn = new mysqli("localhost", "root","", "ejemplo_chat");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>