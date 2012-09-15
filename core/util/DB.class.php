<?php 
	class DB {
		public static function connect($db_host, $db_user, $db_pass) {
			@mysql_connect($db_host, $db_user, $db_pass) or die("Unable to connect to DB server");
		}
		
		public static function selectDataBase($db_name) {
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
		
		public static function close() {
			return mysql_close();
		}
	}
?>
