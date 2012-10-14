<?php 
	class BlogInfo {
		private $blogNavTitle = null;
		private $blogTitle = null;
		private $blogTitleDesc = null;
		private $blogDesc = null;
		
		public static function refreshInfo() {
			$blogNavTitle = DB::executeSingleResultQuery('SELECT * FROM meta WHERE meta_key=\'blog_nav_title\'');
			$blogTitle = DB::executeSingleResultQuery('SELECT * FROM meta WHERE meta_key=\'blog_title\'');
			$blogTitleDesc = DB::executeSingleResultQuery('SELECT * FROM meta WHERE meta_key=\'blog_title_desc\'');
			$blogDesc = DB::executeSingleResultQuery('SELECT * FROM meta WHERE meta_key=\'blog_desc\'');
		}
		
		public static function getBlogNavTitle() {
			return $blogNavTitle;
		}
		
		public static function getBlogTitle() {
			return $blogTitle;
		}
		
		public static function getBlogTitleDescription() {
			return $blogTitleDesc;
		}
		
		public static function getBlogDescription() {
			return $blogDesc;
		}
	}
?>
