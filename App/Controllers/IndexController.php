<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {
		$user = Container::getMododel('User');

		$users = $user->getUsers();

		@$this->view->data = $users;

		$this->render('index', 'layout');
	}

	public function description() {
		
		$description = Container::getMododel('Description');
		$descriptions = $description->getDescriptions();
		@$this->view->data = $descriptions;
		//$this->view->dados = array('Notebook', 'Smartphone');
		$this->render('description', 'layout');
	}

}


?>