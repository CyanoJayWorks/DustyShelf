<?php
	//echo '<h1 align=center>Welcome to DustyShelf!</h1>';
	
	require(DS_PATH . '/core/env_check.php');
	require(DS_PATH . '/core/autoloader.php');
	
	spl_autoload_register('dustyshelf_class_autoload');
	
	if(!Config::hasKeys(array('mysql_user',
						  'mysql_pass',
					      'mysql_host', 
					      'mysql_port'))) {
					      		 	
		Config::set('mysql_user', 'root');
		Config::set('mysql_pass', '');
		Config::set('mysql_host', 'localhost');
		Config::set('mysql_port', '3306');
		
	}
	
	Config::set('blogTitle', 'Ajay\'s Blog');
	
	loadOthers();
	
	require(DS_PATH . '/core/includes/view.php') 
	//$indexController = new IndexController();
	//$indexController->invokeController();
?>
