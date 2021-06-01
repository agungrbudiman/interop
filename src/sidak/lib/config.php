<?php
	$host       = "localhost";
	$username 	= "root";
	$password 	= "";
	$dbname 	= "sidak";
	$base_url   = "http://localhost/github/src/sidak/";

	try {
	    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
	    //set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
	    echo "Connection failed: " . $e->getMessage();
	}
?>
