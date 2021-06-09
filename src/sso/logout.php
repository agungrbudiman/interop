<?php
	session_start();
	unset($_SESSION['sso_username']);
	unset($_SESSION['sso_token']);
	header("Location: index.php");
?>