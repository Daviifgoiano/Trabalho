<?php
	namespace Controllers;
	use Core;
	
	class home extends Core\Controller{
		
		
		public function index(){
			echo 'Bem vindo ao nosso Framework';

			$this->view->render('home/index', '$abc');
		}

		public function one(){
			echo 'metodo chamado';
		}
		
	}