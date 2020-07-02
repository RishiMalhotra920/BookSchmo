<?php
	session_start();
	session_unset();
	header("Location: usersAccount/index.php");
	exit();
?>