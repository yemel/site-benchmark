<?php
class PollsController extends AppController {
	var $helpers = array ('Html','Form');
	var $name = 'Polls';

	function index(){
		$this->set('polls', $this->Poll->find('all'));
	}

	function view($id = null){
		$this->Poll->id = $id;
		$this->set('poll', $this->Poll->read());
	}
}
?>