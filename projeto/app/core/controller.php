<?php
	namespace Core;
	use Models, Views;


	/**
	 * 
	 */
	class Controller{
		
		function __construct($model = null){

			$this->view = new View();

			if (!is_null($model)) {
				$this->model = new Models.'\\'.$model;
			}
		}


	}