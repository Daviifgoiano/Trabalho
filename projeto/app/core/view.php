<?php
	namespace Core;

	/**
	 * 
	 */

	class View{
		


		public function render($view, $data){
			include_once(TEMPLATE . 'pages/header.phtml');
			include_once(TEMPLATE . 'pages/'. $view .'.phtml');
			include_once(TEMPLATE . 'pages/footer.phtml');
		}

	}