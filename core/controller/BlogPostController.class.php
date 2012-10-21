<?php
	class BlogPostController extends AbstractController {
		function __construct() {

		}
		
		public function handleRequest($action, $inputs) {
			echo 'Blog Post Controller Invoked</br>';
			$blogPostModel = new BlogPostModel();
			$blogPostModel->invokeModel();
		}
	}
?>
