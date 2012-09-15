<?php
	function dustyshelf_autoload($className) {
		$classLoc = '';
		
		if(strpos($className, 'Controller') !== false) {
   			$classLoc = '/core/controller/';
		} elseif(strpos($className, 'Model') !== false) {
			$classLoc = '/core/model/';
		} elseif(strpos($className, 'View') !== false) {
   			$classLoc = '/core/view/';
		}
		
		require(DS_PATH . $classLoc . $className . '.class.php');
	}
?>
