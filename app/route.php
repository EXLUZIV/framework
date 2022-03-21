<?php

use App\Classes\RouteClass;

$url = $_SERVER['REQUEST_URI'];
// die($url);

$route = new RouteClass;

$route->addRoute("/", "public/index.php");
$route->addRoute("/test", "public/index.php");
$route->addRoute("", "public/index.php");
$route->addRoute("/posts", "app/api.php");
$route->addRoute("/users", "app/api.php");

$route->route($url);