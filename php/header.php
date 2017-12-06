<?php
include_once("global.php");
$welcome = ($_GET['log'] == 'N')?'Welcome ':'Welcome back, ';
?>
<head>
	<title>Dashboard - <?php echo TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
</head>
<body>
	<nav id="nav_header" class="navbar navbar-static-top">
		<div id="nav_welcome">
			<?php echo $welcome."<b>".$_GET['user']."</b>";?>
		</div>
		<div id="nav_logout">Log Out</div>
	</nav>
</body>
