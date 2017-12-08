<?php
include_once("database.connection.php"); 
include_once("global.php");

if (isset($_POST)){
	foreach ($_POST as $key => $value) {
		switch ($value) {
			case 'pinname':
				$pname = $value;
				break;
			case 'pintag':
				$ptag = $value;
				break;
			case 'pintext':
				$ptext = $value;
				break;
			default:
				break;
		}
	}	
}

$sql = 'SELECT UID, UNAME FROM USERS WHERE UID = \''.UID.'\';';
if ($result = $conn->query($sql)){
	while ($col = $result->fetch_assoc()){
		$uname = $col['UNAME']; 
	}
} else {
	http_response_code(500);
	echo "ERROR: ".$sql."<br>".$result->error;
	return false;
}
if ($pid = $conn->query('SELECT * FROM NPINS')){
		$pid = $pid->num_rows + 1; 
}

if (isset($_POST) && !empty($_POST)){
	$sql = 'INSERT INTO NPINS (PID, PNAME, PTAG, PTEXT, PAUTHOR, PUID) VALUES (\''.$pid.'\',\''.$pname.'\',\''.$ptag.'\',\''.$ptext.'\',\''.$uname.'\',\''.UID.'\')';
	$conn->query($sql);
	if ($conn){
		http_response_code(500);
		echo "ERROR: ".$sql."<br>".$conn->error;
		return false;
	}
	http_response_code(200);	
}