<?php

use App\Classes\RouteClass;

require('../app/Classes/Controller/RouteClass.php');
require('../app/Classes/Models/DeleteClass.php');
require('../app/Classes/Models/GetClass.php');
require('../app/Classes/Models/PatchClass.php');
require('../app/Classes/Models/PostClass.php');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header('Content-type: json/aplication');


$request = new RouteClass;
$request->addRoute();

?>