<?php

namespace Softbox;

class Template {
	
	protected $base_template;
	protected $page;
	protected $data;
	
	public function __construct($base_template) {
		$this->base_template = $base_template;
	}
	
	public function render($page) {
		
		$this->page = $page;
		require $this->base_template;
	}
	
	public function content() {
		require_once './controller/ControllerIndex.php';
		
		$controller = new \ControllerIndex();
		$controller->load();
		
		$this->data = $controller->content;
		require_once $this->page;
	}
}