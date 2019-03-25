<?php
	$user = 'root';
	$pass = '';
	$db = 'onlinetutorials';
	
	$con = mysqli_connect('localhost', $user, $pass, $db);

	// Check connection
	if ($con->connect_error) {
    	die("Connection failed: " . $con->connect_error);
	}
	//echo "Connected successfully";	
?>