<?php
	class BlogPostController extends AbstractController {
		function __construct() {

		}
		
		public function handleRequest($action, $args) {
			echo 'Blog Post Controller Invoked</br>';
			$blogPostModel = new BlogPostModel();
			$blogPostModel->invokeModel();
		}
	}
?>
