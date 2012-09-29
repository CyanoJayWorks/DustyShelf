<?php
	class IndexController extends AbstractController {
		function __construct() {

		}
		
		public function invokeController() {
			echo 'Index Controller Invoked</br>';
			$blogPostModel = new BlogPostModel();
			$blogPostModel->invokeModel();
		}
	}
?>
