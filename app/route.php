<?php

use App\Classes\RouteClass;

$url = key($_GET);

$route = new RouteClass;
$route->addRoute("/", "index.php");
$route->addRoute("", "index.php");

$route->route("/".$url);