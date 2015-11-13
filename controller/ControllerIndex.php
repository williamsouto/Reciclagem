<?php

require_once '.'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php';

class ControllerIndex {
	
	public $content;
	
	public function load() {
		
		require_once './model/ModelAluno.php';
		require_once './model/ModelDisciplina.php';
		require_once './model/TopicData.php';
		
		$disciplina = new ModelDisciplina();
		$aluno = new ModelAluno();
		$matricula = new TopicData();
		
		$listAlunos = $aluno->getAllAluno();
		$listDisciplinas = $disciplina->getAllDisciplina();
		$listMatricula = $matricula->getAllTopics();
		
		$this->content['Alunos'] = "<option value='0'>Selecione...</option>";
		
		foreach ( $listAlunos as $item ) {
			$this->content ['Alunos'] .= "<option value='" . $item ['CODALUNO'] . "'>" . $item ['NOMALUNO'] . "</option>";
		}
		
		$this->content['Disciplinas'] = "<option value='0'>Selecione...</option>";
		foreach ( $listDisciplinas as $item ) {
			$this->content ['Disciplinas'] .= "<option value='" . $item ['CODDISCIPLINA'] . "'>" . $item ['NOMEDISCIPLINA'] . "</option>";
		}

		$this->content['Matriculas'] = '';
		foreach ($listMatricula as $item) {
			
			$this->content['Matriculas'] .= "<tr id=\"" . $item['CODMATRICULA'] . "\">
												<td>". $item['NOMALUNO'] ."</td>
												<td>". $item['NOMEDISCIPLINA'] ."</td>
												<td>". $item['NOTA'] ."</td>
												<td>&nbsp;
														<a href=\"#\" class=\"btnEditar\" id=\"" . $item['CODMATRICULA'] . "\">
															<i class=\"fa fa-pencil-square-o btn-success btn-circle\"></i>
														</a>&nbsp;
														<a href=\"#\" data-target=\"#mdlExcluirReg\" class=\"btnExcluir\" id=\"" . $item['CODMATRICULA'] . "\">
															<i class=\"fa fa-times btn-danger btn-circle\"></i>
														</a>
												</td>
											</tr>";
		}
		
		//require_once "../index.php";
	}
	
	public function addDados($post) {
		require_once '../model/TopicData.php';
		
		$data = new TopicData();
		
		if ($_POST['operacao'] == 'Novo') {
			$json = $data->add($post);
		} else {
			$json = $data->update($post);
		}
		
		return $json;
	}
	
	public function removeMatricula($codMatricula) {
		require_once '../model/TopicData.php';
				
		$data = new TopicData();
		$json = $data->delete($codMatricula);
		
		return $json;
	}
	
	public function selecionaMatricula($codMatricula) {
		require_once '../model/TopicData.php';
		
		$data = new TopicData();
		$json = $data->getTopic($codMatricula);
		
		return $json;
	}
}

