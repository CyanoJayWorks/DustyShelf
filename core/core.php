<?php
	echo '<h1 align=center>Welcome to DustyShelf!</h1>';
	
	require(DS_PATH . '/core/env_check.php');
	require(DS_PATH . '/core/autoloader.php');
	
	loadMisc();
	spl_autoload_register('dustyshelf_autoload');
	
	$indexController = new IndexController();
	$indexController->invokeController();
?>
