<?php

namespace App\Classes;

use App\Interface\ConnectorInterface;

class ConnectorClass implements ConnectorInterface
{
	private string $server;
	private string $pass;
	private string $user;
	private string $bd;
	private string $port;

	public function __construct(ConfigBDClass $bdconfig)
	{
		$this->server = $bdconfig->getConfig('server');
		$this->pass = $bdconfig->getConfig('pass');
		$this->user = $bdconfig->getConfig('user');
		$this->bd = $bdconfig->getConfig('bd');
		$this->port = $bdconfig->getConfig('port');
	}	

	public function conectBD()
	{
		// echo $this->server, $this->user, $this->pass, $this->bd;	
		// die();
		$link = mysqli_connect($this->server, $this->user, $this->pass, $this->bd, $this->port);
		
		if (mysqli_connect_errno()) {
			echo 'Error' . mysqli_connect_errno() . '-' . mysqli_connect_error();
			die();
		}

		return $link;
	}
}