<?php
class UsersController extends AppController {
	var $helpers = array ('Html','Form');
	var $name = 'Users';

	function index(){
		$this->set('users', $this->User->find('all'));
	}

	function view($id = null){
		$this->User->id = $id;
		$this->set('user', $this->User->read());
	}
}
?>