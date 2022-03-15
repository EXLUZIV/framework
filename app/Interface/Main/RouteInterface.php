<?php

namespace App\Interface;

interface RouteInterface
{
	public function addRoute(string $url, string $path): void;
	public function route(string $url): void;
}