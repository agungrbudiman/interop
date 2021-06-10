<?php
	session_start();
	unset($_SESSION['sso_username']);
	header("Location: index.php");
?>