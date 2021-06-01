<?php 
	define('LIB_DIR', './lib/');
	require_once(LIB_DIR . 'config.php');

	session_start();
	if(empty($_SESSION['us_username']))
	{
	    $id = 'warning';
		header('location:signin/'.$id);
	}
?>