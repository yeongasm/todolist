<?php
include_once('database.connection.php');
// var_dump($_POST);
if (isset($_POST)){
	foreach ($_POST as $key => $value) {
 		switch ($key) {
 			case 'uname':
 				$uname = trim($value);
 				break;
 			case 'email':
 				$email = trim($value);
 				break;
 			case 'pwd':
 				$pwd = trim($value);
 				break;
 			case 'repwd':
 				$repwd = trim($value);
 				break;
 			case 'chkbox':
 				$chkbox = trim($value); 
 				break;
 			default:
 				break;
 		}	
	}
}

if (empty($chkbox)){
	http_response_code(500); 
	echo "ERROR: Please ensure that you agreed with the terms and have the checkbox ticked!";
	return false; 
} else if (htmlspecialchars(trim($pwd)) != htmlspecialchars(trim($repwd))){
	http_response_code(500);
	echo "ERROR: Passwords do not match!";
	return false; 
} else {
	$sql = 'SELECT UNAME, UEMAIL FROM USERS WHERE UNAME=\''.$uname.'\' OR UEMAIL=\''.$email.'\';';
	if ($result = $conn->query($sql)){
		while ($col = $result->fetch_assoc()){
			if ($col['UNAME'] == $uname){
				http_response_code(500);
				echo "ERROR: Username is already in use.";
				return false; 
			} else if ($col['UEMAIL'] == $email){
				http_response_code(500);
				echo "ERROR: E-mail is already in use.";
				return false;	
			}
		}
	}
	$result->free();

	if ($uid = $conn->query('SELECT * FROM USERS')){
		$uid = $uid->num_rows + 1; 
	}

	$sql = 'INSERT INTO USERS (UID, UNAME, UEMAIL, UPASSWORD) VALUES (\''.$uid.'\',\''.$uname.'\',\''.$email.'\',\''.md5($pwd).'\')';

	//Use $conn to perform any actions related to database
	$conn->query($sql);
	if (!$conn){
		http_response_code(500);
		echo "ERROR: ".$sql."<br>".$conn->error;
		return false;
	}
	http_response_code(200);
	// $_POST['new_user'] = true; 		
	// $sql->bind_param('isss', $uid, $uname, $email, md5($pwd)); 
	// $sql->execute(); 
	// var_dump($sql);
}
