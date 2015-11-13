<?php
class TopicData {
	protected $connection;
	function __construct() {
		try {
			$this->connection = new PDO ( 'mysql:host=localhost; dbname=softbox; charset=utf8', 'root', '' );
		} catch ( PDOException $e ) {
			echo $e->getMessage ();
		}
	}
	public function getAllTopics() {
		$stmt = $this->connection->prepare ("SELECT m.CODMATRICULA, a.NOMALUNO, d.NOMEDISCIPLINA, m.NOTA, m.NOTA 
				FROM tmatricula m INNER JOIN taluno a ON a.CODALUNO = m.CODALUNO 
				INNER JOIN tdisciplina d ON d.CODDISCIPLINA = m.CODDISCIPLINA
				ORDER BY a.NOMALUNO" );
		
		$stmt->execute ();
		
		return $stmt->fetchAll ( PDO::FETCH_ASSOC );
	}
	public function getTopic($codMatricula) {
		$query = "SELECT * FROM TMatricula WHERE CODMATRICULA = :cod";
		
		$stmt = $this->connection->prepare($query);
		$stmt->bindParam(":cod", $codMatricula, PDO::PARAM_INT);
		$stmt->execute();
		$data = $stmt->fetch();
		
		return json_encode(array(
				'codMatricula' => $data['CODMATRICULA'],
				'codAluno' => $data['CODALUNO'],
				'codDisciplina' => $data['CODDISCIPLINA'],
				'nota' => $data['NOTA']
		));
	}
	public function add($data) {	
		$query = "INSERT INTO TMatricula (CODALUNO, CODDISCIPLINA, NOTA) VALUES (:codaluno, :coddisciplina, :nota)";
		$stmt = $this->connection->prepare($query);
		$data1 = array(
				':codaluno' => $data['codAluno'],
				':coddisciplina' => $data['codDisciplina'],
				':nota' => str_replace(',', '.', $data['nota'])
		);
		
		if( $stmt->execute($data1)) {
			return json_encode(array(
				'codMatricula' => $this->connection->lastInsertId(),
				'codAluno' => $data['codAluno'],
				'codDisciplina' => $data['codDisciplina'],
				'nota' => str_replace(',', '.', $data['nota']),
				'nomeAluno' => $data['nomeAluno'],
				'nomeDisciplina' => $data['nomeDisciplina']
			));
		}
		return 0;
	}
	
	public function update($data) {
		$query = 'UPDATE TMatricula SET CODALUNO = :codAluno, CODDISCIPLINA = :codDisciplina, NOTA = :nota
					WHERE CODMATRICULA = :codMatricula';
		$stmt = $this->connection->prepare($query);
		
		$data1 = array(
				':codMatricula' => $data['codMatricula'],
				':codAluno' => $data['codAluno'],
				':codDisciplina' => $data['codDisciplina'],
				':nota' => $data['nota']
		);
		
		if ($stmt->execute($data1)) {
			return json_encode(array(
					'codMatricula' => $data['codMatricula'],
					'codAluno' => $data['codAluno'],
					'codDisciplina' => $data['codDisciplina'],
					'nota' => $data['nota'],
					'nomeAluno' => $data['nomeAluno'],
					'nomeDisciplina' => $data['nomeDisciplina']
			));
		}
		
	}
	
	public function delete($codMatricula) {
		$query = 'DELETE FROM tmatricula WHERE CODMATRICULA = :codMatricula';
		
		$stmt = $this->connection->prepare($query);
		$stmt->bindParam(":codMatricula", $codMatricula, PDO::PARAM_INT);
		
		if ($stmt->execute()) {
			return json_encode(array(
					':codMatricula' => $codMatricula
			));
		}
		
		return 0;
	}
}