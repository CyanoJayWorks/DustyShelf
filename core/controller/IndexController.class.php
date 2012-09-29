<?php
	class IndexController extends AbstractController{
		function __construct() {
			Config::set('mysql_user', 'root');
			Config::set('mysql_pass', '');
			Config::set('mysql_host', 'localhost');
			Config::set('mysql_port', '3306');
		}
		
		public function invokeController() {
			echo 'Index Controller Invoked</br>';
			$blogPostModel = new BlogPostModel();
			$blogPostModel->invokeModel();
		}
	}
?>
