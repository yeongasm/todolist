<?php
include_once("database.connection.php"); 

if (isset($_POST['uname']) && isset($_POST['pwd'])){
	$user = $_POST['uname'];
	$pwd = md5($_POST['pwd']);
}
// echo md5($password);
$sql = "SELECT * FROM USERS WHERE UNAME='".$user."' AND UPASSWORD='".$pwd."';"; 

$res = $conn->query($sql);
if (!$res){
	http_response_code(500); 
	echo "ERROR: Account does not exist.";
	return false; 
}
$row = $res->num_rows;
if ($row == 0){
	http_response_code(500);
	echo "ERROR: Whoops! Either your account does not exist or you have keyed in the wrong Username or Password :(";
	return false; 
}
http_response_code(200); 
while ($col = $res->fetch_assoc()){
	echo json_encode(array('user'=>$user,'log'=>$col['ULOGGED_IN'],'uid'=>$col['UID']));
	if ($col['ULOGGED_IN'] == 'N'){
		$sql = 'UPDATE USERS SET ULOGGED_IN = \'Y\' WHERE UID=\''.$col['UID'].'\';';
		$update = $conn->query($sql);
		if (!$update){
			echo "ERROR: ".$sql."<br>".$update->error;
			return false;
		}		
	}
}