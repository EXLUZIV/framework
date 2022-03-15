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
		$file_dir = 'public/'.$path;
		if($path === ''){
			die('This page does not exist');
		}

		if(file_exists($file_dir)){
			require $file_dir;
		}else{
			die('This page does not exist');
		}
	}
}