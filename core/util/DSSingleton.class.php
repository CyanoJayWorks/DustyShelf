<?php
	abstract class DSSingleton {
		protected static $instance;
		
		protected static function getInstance() {
			return is_null($this->instance) ? null : $this->instance;	
		}
	
		protected final function __construct() {}
		private final function __clone() {}
	}
?>
