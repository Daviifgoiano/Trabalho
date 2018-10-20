<?php
	include_once('app/config.php');
	include_once('app/core/app.php');
	
	spl_autoload_register(function($class){
		
		$path =  str_replace('\\', DS , ROOT . $class . '.php');
		
		if(file_exists($path))
			include_once($path);
	});
	
	$app = new Core\App;
	$app->run();
	
	
	

	
	
	
	