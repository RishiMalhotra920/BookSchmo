<?php
	include "includes/connection.php";
	session_destroy();
	header("Location: login.php");
?>