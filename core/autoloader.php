<?php
	function dustyshelf_autoload($className) {
		$classLoc = '';
		
		if(strpos($className, 'Controller') !== false) {
   			$classLoc = '/core/controller/';
		} elseif(strpos($className, 'Model') !== false) {
			$classLoc = '/core/model/';
		} elseif(strpos($className, 'View') !== false) {
   			$classLoc = '/core/view/';
		} elseif(strpos($className, 'Config') !== false) {
   			$classLoc = '/core/config/';
		}
		
		require(DS_PATH . $classLoc . $className . '.class.php');
	}
	
	function loadMisc() {
		require_once(DS_PATH . '/core/util/DSSingleton.class.php');
		require_once(DS_PATH . '/core/util/DB.class.php');
	}
?>
