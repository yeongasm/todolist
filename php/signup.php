<?php
include_once("global.php");?>
<html>
<head>
	<title>Sign Up - <?php echo TITLE; ?></title>
	<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
	<!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css">
	<!--//Bootstrap-->
	<link rel="stylesheet" href="../css/signup.css" type="text/css">
	<script src="../jquery-3.2.1.js"></script>
	<script src="../js/ajax.signup.js"></script>
</head>
<body>
	<div id="signup_box" class="container">
		<h2 id="signup_text" class="form-signin-heading">Sign Up!</h2>	
		<div id="err_msg">
	    </div>
		<form id="ajax_form" method="post" action="signup.script.php" class="form-signin">
			<div class="form-inline">
				<label class="control-label col-sm-2" for="reg_user">Username:</label>
				<input type="text" name="uname" class="form-control" id="reg_user" required autofocus>
			</div>
			<div class="form-inline">
				<label class="control-label col-sm-2" for="reg_email">E-mail:</label>
				<input type="email" name="email" class="form-control" id="reg_email" required>
			</div>
			<div class="form-inline">
				<label class="control-label col-sm-2" for="reg_pwd">Password:</label>
				<input type="password" name="pwd" class="form-control" id="reg_pwd" required>
			</div>
			<div class="form-inline">
				<label class="control-label col-sm-2" for="reg_pwd">Re-enter password:</label>
				<input type="password" name="repwd" class="form-control" id="reg_repwd" required>
			</div>
			<div id="label_text" class="checkbox">
	          <label>
	            I hereby agree that the information inserted is correct and accurate. <input id="chk_box" type="checkbox" name="chkbox" value="true"> 
	          </label>
	        </div>        
	       	<button id="submit_button" type="submit" class="btn btn-lg btn-primary btn-block">Register!</button>
	</form>
	</div>
</body>
</html>
