<?php 
	class DB {
		private static $isConnected;
		private static $connection;
		
		public static function connect($db_host, $db_user, $db_pass) {
			if(self::$isConnected) return;
			
			if(!(self::$connection = @mysql_connect($db_host, $db_user, $db_pass))) {
				die("Unable to connect to DB server");
				self::$isConnected = false;
			} else {
				self::$isConnected = true;
			}
		}
		
		public static function selectDatabase($db_name) {
			mysql_select_db($db_name) or die("Unable to select database");
		}
		
		public static function executeNoResultQuery($query) {
			return mysql_query($query);
		}
		
		public static function executeResultQuery($query) {
			$queryResults = mysql_query($query);
			$parsedResults = array();

			while($currRow = mysql_fetch_assoc($queryResults)) {
			    $parsedResults[] = $currRow;
			}

			return $parsedResults;
		}
		
		public static function executeSingleResultQuery($query) {
			$data = mysql_fetch_assoc(mysql_query($query));
			
			return $data;
		}
				
		public static function close() {
			if(!self::$isConnected)
				return mysql_close(self::$connection);
		}
		
		public static function isConnected() {
			return self::$isConnected;
		}
	}
?>
