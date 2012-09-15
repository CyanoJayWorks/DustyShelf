<?php
	echo '<h1 align=center>Welcome to DustyShelf!</h1>';
	
	require(DS_PATH . '/core/env_check.php');
	require(DS_PATH . '/core/autoloader.php');
	
	spl_autoload_register('dustyshelf_autoload');
	
	$masterController = new MasterController();
	$masterController->invokeController();
?>
