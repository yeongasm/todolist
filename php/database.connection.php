<?php

$servername = "us-cdbr-iron-east-05.cleardb.net";
$username = "b84d43086ab0cc";
$password = "fc071062";
$db = "heroku_04351bd6009c69b";

//Create connection 
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error){
	die("Connection failed. ERROR (".$conn->connect_errno."): ".$conn->connect_error);
}

?>