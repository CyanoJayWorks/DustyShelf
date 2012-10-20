<?php 
	class BlogInfo {
		private static $blogNavTitle = null;
		private static $blogTitle = null;
		private static $blogTitleDesc = null;
		private static $blogDesc = null;
		private static $blogCopyright = null;
		private static $blogHeaderImage = null;
		
		public static function refreshInfo() {
			self::$blogNavTitle = DB::executeSingleResultQuery('SELECT meta_data FROM meta WHERE meta_key=\'blog_nav_title\'')['meta_data'];
			self::$blogTitle = DB::executeSingleResultQuery('SELECT meta_data FROM meta WHERE meta_key=\'blog_title\'')['meta_data'];
			self::$blogTitleDesc = DB::executeSingleResultQuery('SELECT meta_data FROM meta WHERE meta_key=\'blog_title_desc\'')['meta_data'];
			self::$blogDesc = DB::executeSingleResultQuery('SELECT meta_data FROM meta WHERE meta_key=\'blog_desc\'')['meta_data'];
			self::$blogCopyright = DB::executeSingleResultQuery('SELECT meta_data FROM meta WHERE meta_key=\'blog_cpryt\'')['meta_data'];
			self::$blogHeaderImage = DB::executeSingleResultQuery('SELECT meta_data FROM meta WHERE meta_key=\'blog_header_uri\'')['meta_data'];
		}
		
		public static function getBlogNavTitle() {
			return self::$blogNavTitle;
		}
		
		public static function getBlogTitle() {
			return self::$blogTitle;
		}
		
		public static function getBlogTitleDescription() {
			return self::$blogTitleDesc;
		}
		
		public static function getBlogDescription() {
			return self::$blogDesc;
		}
		
		public static function getBlogCopyright() {
			return self::$blogCopyright;
		}
		
		public static function getBlogHeaderImage() {
			return self::$blogHeaderImage;
		}
	}
?>
