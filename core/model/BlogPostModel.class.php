<?php
    class BlogPostModel extends AbstractModel {
		private $blogPostView = null;
		
		function __construct() {
			$this->blogPostView = new BlogPostView();
		}
		
		public function invokeModel() {
			echo 'Blog Post Model Invoked</br>';
			
			DB::connect(Config::get('mysql_host'), Config::get('mysql_user'), Config::get('mysql_pass'));
			
			DB::selectDatabase('dustyshelf');
			$results = DB::executeResultQuery('SELECT body FROM posts');
			
			DB::close();

			$this->blogPostView->showView($results);
		}
	}
?>
