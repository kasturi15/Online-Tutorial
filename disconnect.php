<?php 

require_once 'connect.php';
session_start();

if ($_SESSION['Id'] ||$_SESSION['s_user_id']||$_SESSION['a_user_id']||$_SESSION['tutorName']||$_SESSION['username']) {
	# code...
	session_destroy();
	header('location: index.php');
}

 ?>