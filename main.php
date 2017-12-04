<?php include_once("global.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo TITLE; ?></title>
	<!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css">
	<!--//Bootstrap-->
	<link rel="stylesheet" href="css/main.css" type="text/css">
	<script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
<div id="login_box" class="container">
	<form action="php/main_menu.php" method="post" class="form-signin">
		<h2 id="sign_in_txt" class="form-signin-heading">Please Sign In</h2>
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

