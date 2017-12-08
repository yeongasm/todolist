<?php
include_once("global.php");
$welcome = ($_GET['log'] == 'N')?'Welcome ':'Welcome back, ';
?>
<head>
	<title>Dashboard - <?php echo TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0-beta.2/dist/css/bootstrap.css">
	<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/header.buttons.css">
	<link rel="stylesheet" type="text/css" href="../css/create_pin.modal.css">
	<script src="../jquery-3.2.1.js"></script>
	<script src="../bootstrap-4.0.0-beta.2/dist/js/bootstrap.bundle.js"></script>
	<!-- <script src="../bootstrap-4.0.0-beta.2/dist/js/bootstrap.js"></script> -->
	<script src="../js/header.js"></script>
</head>
<body>
<nav id="nav_header" class="navbar navbar-static-top">
	<input type="checkbox" id="menu_opener_id" class="menu_opener">
		<label for="menu_opener_id" class="menu_opener_label"><img src="../img/noted_logo.svg"></label>
		<div class="link_one link_general" id="createBtn"><i class="fa fa-plus fa-2x" aria-hidden="true"></i><p>Create Pin</p></div>
		<div class="link_two link_general" id="edit_pin"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i><p>Edit Pins</p></div>
		<div class="link_three link_general" id="user_profile"><i class="fa fa-user fa-2x"></i><p><!-- User Profile -->:(</p></div>
		<div class="link_four link_general" id="noted_settings"><i class="fa fa-cog fa-2x"></i><p><!-- Settings -->:(</p></div>
	</input>		
	<div id="nav_welcome">
		<?php echo $welcome."<b>".$_GET['user']."</b>";?>
	</div>
	<div id="nav_logout">Log Out</div>
</nav>

<div id="modaltest"></div>