<?php
class ChoicesController extends AppController {
	var $helpers = array ('Html','Form');
	var $name = 'Choices';

	function index(){
		$this->set('choices', $this->Choice->find('all'));
	}

	function view($id = null){
		$this->Choice->id = $id;
		$this->set('choice', $this->Choice->read());
	}
}
?>