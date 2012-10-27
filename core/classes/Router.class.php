<?php
    class Router {
		
		public static function doRouting($controller, $action, $arg) {
			$rawKeys = array();
			$rawVals = array();
			$args = array();
			
			$raw = explode('/', $arg);
			
			$rawSize = count($raw);	
			
			if($rawSize % 2 != 0) {
				if($raw[$rawSize-1] == '') {
					array_pop($raw);
					$rawSize--;
				} else {
					Feedback::do404();
					die();
				}
			} 
			
			$keysCount = 0;
			$valsCount = 0;
			
			for($idx = 0; $idx < $rawSize; $idx++) {
				if($idx % 2 == 0) 
					$rawKeys[$keysCount++] = $raw[$idx];
				else 
					$rawVals[$valsCount++] = $raw[$idx];
			}
			
			$inputsSize = count($rawKeys);
			
			for($idx = 0; $idx < $inputsSize; $idx++) {
				$args[$rawKeys[$idx]] = $rawVals[$idx];
			}
			
			foreach ($args as $key => $value) {
				echo '<br />  ' . $key . '  ==>  ' . $value;
			}
			
			switch ($controller) {
				case 'page':
					$reqHandler = new BlogPostController();
					$reqHandler->handleRequest($action, $args);
					break;
				case 'admin':
					
					break;
				case 'comments':
					
					break;
				case 'post':
					
					break;
				default:
					Feedback::do404();
					die();
					break;
			}
		}
	}
?>