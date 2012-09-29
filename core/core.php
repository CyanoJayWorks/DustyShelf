<?php
	echo '<h1 align=center>Welcome to DustyShelf!</h1>';
	
	require(DS_PATH . '/core/env_check.php');
	require(DS_PATH . '/core/autoloader.php');
	
	spl_autoload_register('dustyshelf_class_autoload');
	
	Config::set('mysql_user', 'root');
	Config::set('mysql_pass', '');
	Config::set('mysql_host', 'localhost');
	Config::set('mysql_port', '3306');
	
	loadOthers();
		
	$indexController = new IndexController();
	$indexController->invokeController();
?>
