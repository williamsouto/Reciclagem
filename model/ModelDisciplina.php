<?php

class ModelDisciplina {
	
	protected $connection;
	
	function __construct() {
		$this->connection = new PDO('mysql:host=localhost; dbname=softbox; charset=utf8','root','');
	}
	
	public function getAllDisciplina() {
		
		$query = "SELECT * FROM TDisciplina";
		$cmd = $this->connection->prepare($query);
		$cmd->execute();
		
		return $cmd->fetchAll(PDO::FETCH_ASSOC);
	}
}