<?php

$servername = "localhost";
$username = "root";
$password = "password";
$db = "mydb_lm";

//Create connection 
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error){
	die("Connection failed. ERROR (".$conn->connect_errno."): ".$conn->connect_error);
}
// echo "Success: ".$conn->host_info."\n";
?>