<?php
class ModelAluno {
	
	protected $connection;
	
	function __construct() {
		$this->connection = new PDO('mysql:host=localhost; dbname=softbox; charset=utf8', 'root', '');
	}
	
	public function getAllAluno() {
		$query = "SELECT * FROM TAluno";
		$cmd = $this->connection->prepare($query);
		$cmd->execute();
		
		return $cmd->fetchAll(PDO::FETCH_ASSOC);
	}
}