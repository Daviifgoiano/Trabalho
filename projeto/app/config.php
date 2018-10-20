<?php

	
	//configs directory
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', __DIR__ . DS);


	
	define('APP_TITLE', 'MUDA BRASIL');
	define('APP_URL', 'http://'.$_SERVER['SERVER_NAME'].'/projeto/');
	
	define('CONTROLLERS', ROOT. 'controllers' . DS);
	define('VIEWS', ROOT. 'views' . DS);
	define('TEMPLATE', VIEWS.'template'. DS);