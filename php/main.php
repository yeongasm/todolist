<?php include_once("global.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo TITLE; ?></title>
	<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
	<!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css">
	<!--//Bootstrap-->
	<link rel="stylesheet" href="../css/main.css" type="text/css">
	<script src="../jquery-3.2.1.js"></script>
	<script type="text/javascript" src="../js/ajax.main.js"></script>
</head>
<body>
<div id="login_box" class="container">
	<h2 id="sign_in_txt" class="form-signin-heading">Please Sign In</h2>
	<div id="err_msg">
	</div>
	<form id="ajax_form" method="post" action="main.script.php" class="form-signin">
		<label for="input_uname" class="sr-only">Username</label>
		<input type="text" name="uname" class="form-control" id="input_uname" placeholder="Username" required autofocus>
		<label for="input_pwd" class="sr-only">Password</label>
		<input type="password" name="pwd" class="form-control" id="input_pwd" placeholder="Password" required>  
       	<button type="submit" id="input_btn" class="btn btn-lg btn-primary btn-block">Sign In</button>
	</form>

	<div id="sign_up">
		<br>
		<p>Not yet a user? Click <a href="signup.php">here</a> to register.</p>
	</div>
</div>
</body>
</html>


