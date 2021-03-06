<?php

namespace App\Classes;

use mysqli;

class CreatePostClass extends ConnectorClass
{

	private string $text;
	private string $table;
	private string $userId;
	private string $nameTitle;
	private $link;

	public function __construct(ConfigBDClass $bdconfig)
	{
		parent::__construct($bdconfig);

		$this->link = parent::conectBD();
	}

	public function configPost(string $table, string $userId, string $nameTitle, string $text): void
	{
		$this->table = $table;
		$this->userId = $userId;
		$this->nameTitle = $nameTitle;
		$this->text = $text;
	}

	public function addPost(): void
	{
		if($this->text === '' || $this->table === '' || $this->userId === ''){
			echo 'Data not entered';
			die();
		}

		$sql = "INSERT INTO 
		`$this->table` (
			`post_id`, 
			`user_id`, 
			`post_title`, 
			`post_text`
			) VALUES (
				NULL, 
				'$this->userId', 
				'$this->nameTitle', 
				'$this->text'
				);";

		$add = mysqli_query($this->link, $sql);
		echo 'Post add in table';
		echo '<br>';
	}
}