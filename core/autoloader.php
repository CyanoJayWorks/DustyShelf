<?php
	function dustyshelf_autoload($className) {
		require(DS_PATH . '/core/classes/' . $className . '.class.php');
	}
?>
