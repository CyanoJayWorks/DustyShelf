<?php 
	class BlogInfo {
		private static $blogNavTitle = null;
		private static $blogTitle = null;
		private static $blogTitleDesc = null;
		private static $blogDesc = null;
		private static $blogCopyright = null;
		private static $blogHeaderImage = null;
		
		public static function refreshInfo() {
			$navTitle = DB::executeSingleResultQuery('SELECT meta_data FROM meta WHERE meta_key=\'blog_nav_title\'');
			$title = DB::executeSingleResultQuery('SELECT meta_data FROM meta WHERE meta_key=\'blog_title_desc\'');
			$titleDesc = DB::executeSingleResultQuery('SELECT meta_data FROM meta WHERE meta_key=\'blog_title_desc\'');
			$desc = DB::executeSingleResultQuery('SELECT meta_data FROM meta WHERE meta_key=\'blog_desc\'');
			$copyright = DB::executeSingleResultQuery('SELECT meta_data FROM meta WHERE meta_key=\'blog_cpyrt\'');
			$headerImage = DB::executeSingleResultQuery('SELECT meta_data FROM meta WHERE meta_key=\'blog_header_uri\'');
			
			self::$blogNavTitle = $navTitle['meta_data'];
			self::$blogTitle = $title['meta_data'];
			self::$blogTitleDesc = $titleDesc['meta_data'];
			self::$blogDesc = $desc['meta_data'];
			self::$blogCopyright = $copyright['meta_data'];
			self::$blogHeaderImage = $headerImage['meta_data'];
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
