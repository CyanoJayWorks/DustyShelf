<?php
	function dustyshelf_class_autoload($className) {
		if(strpos($className, 'Controller')) {
			require(DS_PATH . '/core/controller/' . $className . '.class.php');
		} else if(strpos($className, 'Model')) {
			require(DS_PATH . '/core/model/' . $className . '.class.php');
		} else if(strpos($className, 'View')) {
			require(DS_PATH . '/core/view/' . $className . '.class.php');
		} else 
			require(DS_PATH . '/core/classes/' . $className . '.class.php');
	}
	
	function loadOthers() {
		foreach(glob(DS_PATH . '/core/includes/*.php') as $phpfile) {
			require_once $phpfile;
		}
	}
?>
