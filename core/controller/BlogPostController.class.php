<?php
	class BlogPostController extends AbstractController {
		function __construct() {

		}
		
		public function handleRequest($action, $args) {
			echo '<br /> Blog Post Controller Invoked <br />';
			
			switch($action) {
				case "view":
					self::viewAction();
					break;
				default:
					Feedback::do404();
					break;
			}
			
			$blogPostModel = new BlogPostModel();
			$blogPostModel->invokeModel();
		}
		
		private function viewAction() {
			echo 'View Action on Controller';
		}
	}
?>
