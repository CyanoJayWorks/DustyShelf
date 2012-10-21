<?php
    class Router {
		
		public static function doRouting($controller, $action, $input) {
			
			
			switch ($controller) {
				case 'page':
					
					break;
				case 'admin':
					
					break;
				case 'comments':
					
					break;
				case 'post':
					
					break;
				default:
					Feedback::do404();
					break;
			}
		}
		
		
	}
?>