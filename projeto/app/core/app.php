<?php
	namespace Core;
	use Controllers;

	class App{

		public $url;
		public $controller;
		public $method;
		public $params = array();
	
		//definimos a url do sistema
		private function setUrl(){
			$this->url = isset($_GET['url']) ? $_GET['url'] : 'home' ;
			$this->url = rtrim(filter_var($this->url , FILTER_SANITIZE_URL), '/');
			$this->url = explode("/",$this->url);
			
			return $this->url;
		}
		
		//definimos o controller principal
		private function setController(){
			$this->controller = isset($this->url[0]) ? $this->url[0] : 'home' ;	
			array_shift($this->url);
			
			$ctrl = 'Controllers'. DS . $this->controller;

			if (class_exists($ctrl)) {
				$this->controller = new $ctrl;	
			}else{
				$this->controller = new Controllers\Error();
			}
		}
		
		//define o method que vai ser usado no method
		private function setMethod(){
			$this->method = isset($this->url[0]) ? $this->url[0] : 'index' ;	
			array_shift($this->url);

			call_user_func_array([$this->controller, $this->method], $this->params);
		
		}
		
		//define os parametros que serão passados pro methodo
		private function setParams(){
			$this->params = !empty($this->url) ? $this->url : '' ;	
		}
		
		//inicia a parada
		public function run(){			
			$this->setUrl();
			$this->setController();
			$this->setMethod();
			$this->setParams();			
		}

	
	}