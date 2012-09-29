<?php
	function dustyshelf_class_autoload($className) {
		require(DS_PATH . '/core/classes/' . $className . '.class.php');
	}
	
	function loadOthers() {
		foreach(glob(DS_PATH . '/core/includes/*.php') as $phpfile) {
			require_once $phpfile;
		}
	}
?>
