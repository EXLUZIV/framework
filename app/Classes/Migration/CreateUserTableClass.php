<?php

namespace App\Classes;

use App\Classes\ConnectorClass;

class CreateUserTableClass extends ConnectorClass
{
	private $link;
	private $bdconfig;

	public function __construct(ConfigBDClass $bdconfig)
	{
		parent::__construct($bdconfig);

		$this->link = parent::conectBD();
	}

	public function createTable(string $nameTable): void
	{

		$sql = "SHOW TABLES FROM `db` like '$nameTable';";
		$checkTable = mysqli_query($this->link, $sql);
		$checkTable = mysqli_fetch_array($checkTable);

		if (isset($checkTable)) {
			
			return;
		} else {

			$sql = "CREATE TABLE $nameTable (
				user_id INT AUTO_INCREMENT PRIMARY KEY, 
				name VARCHAR(255) NOT NULL, 
				password VARCHAR(32), 
				email VARCHAR(255) NOT NULL UNIQUE 
				);";
	
			$createTable = mysqli_query($this->link, $sql);
			echo 'Create user table';
			echo '<br>';
			
			return;
		}
	}
}