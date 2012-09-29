<?php
    class Config {
    	private static $config = array('');
	
		public static function get($key) {
    		return self::$config[$key];
    	}
		
		public static function set($key, $value) {
    		self::$config[$key] = $value;
    	}
		
		public static function hasKeys($keys) {
    		foreach ($keys as $key) {
				if(!array_key_exists($key, self::$config)) {
					return false;
				}
			}
			
			return true;
    	}
		
		public static function hasKey($key) {
			return array_key_exists($key, self::$config);
    	}
    }
?>
