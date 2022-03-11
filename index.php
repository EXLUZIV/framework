<?php

$request = $_SERVER['REQUEST_URI'];
// die($request);

switch ($request) {
    case '/' :
        require __DIR__ . '/public/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
	case 'posts':
		require __DIR__ . '/views/index.php';
		break;
}

require_once('app/bootstrap.php');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header('Content-type: json/aplication');
?>