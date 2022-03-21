<?php

namespace App\Classes;

use App\Interface\RouteInterface;

class RouteClass implements RouteInterface
{
	private $pages = [];

	public function addRoute(string $url, string $path): void
	{
		$this->pages[$url] = $path;
	}

	public function route(string $url): void
	{
		$path = $this->pages[$url];
		
		if($path === ''){
			die('This page does not exist');
		}

		if(file_exists($path)){
			require $path;
		}else{
			die('This page does not exist');
		}
	}
}