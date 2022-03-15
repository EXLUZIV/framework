<?php
	
	$link = mysqli_connect('127.0.0.1', 'root', 'root', 'db', '8080');
		if (mysqli_connect_errno()) {
			die('Error' . mysqli_connect_errno() . '-' . mysqli_connect_error());
		}
	die('connected');

require_once('app/bootstrap.php');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header('Content-type: json/aplication');
?>