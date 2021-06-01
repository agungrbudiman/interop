<?php 
	require_once(__DIR__.'/config.php');
	session_start();
	if(empty($_SESSION['us_username']))
	{
	    $id = 'warning';
		header('location:signin/'.$id);
	}
?>