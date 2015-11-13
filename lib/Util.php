<?php

require_once '..'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php';
$util = new Util();
$util->verificaUrl();

class Util {
	
	public function verificaUrl() {
		
		if (isset($_POST) && sizeof($_POST) > 0) {
			
			require_once '../controller/ControllerIndex.php';
			$obj = new ControllerIndex();
			
			if ($_POST['metodo'] == 'addDados') {
				$json = $obj->addDados($_POST);
			} else if ($_POST['metodo'] == 'removeMatricula') {
				$json = $obj->removeMatricula($_POST['codMatricula']);
			} else if ($_POST['metodo'] == 'selecionaMatricula') {
				$json = $obj->selecionaMatricula($_POST['codMatricula']);
			}
			
			echo $json;
			exit;
			
		} else {
			$this->carregaIndex();
		}
	}
	
	private function carregaIndex() {
		require_once '../controller/ControllerIndex.php';
		$obj = new ControllerIndex();
		$json = $obj->load($_POST);
	}
}