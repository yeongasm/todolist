<?php
define('TITLE', "List Me!");
define('HOME_DIR', __DIR__.'/');
if (isset($_SESSION['uid']) && !empty($_SESSION['uid']) && $_SESSION['uid'] != ''){
	define('UID', $_SESSION['uid']);	
}
if (isset($_SESSION['log']) && !empty($_SESSION['log']) && $_SESSION['log'] != ''){
	define('LOG', $_SESSION['log']);	
}
if (isset($_SESSION['user']) && !empty($_SESSION['user']) && $_SESSION['user'] != ''){
	define('USER', $_SESSION['user']);	
}
?> 