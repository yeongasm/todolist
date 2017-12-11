<?php
include_once("database.connection.php");

if (isset($_POST['pin_id']) && htmlspecialchars($_POST['pin_id']) && trim($_POST['pin_id']) != ''){
	$pinID = $_POST['pin_id'];
}
$sql = 'DELETE FROM NPINS WHERE PID = \''.$pinID.'\'';
$del = $conn->query($sql);
if(!$del){
	echo "ERROR: ".$sql."<br>".$del->error;
	http_response_code(500);
	return false;
} 
http_response_code(200);