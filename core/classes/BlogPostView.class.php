<?php
    class BlogPostView extends AbstractView {
		function __construct() {
			
		}
		
		public function showView(array $data) {
			echo 'Blog Post View Shown</br>';
			
		    foreach ($data as $key => $value) {
				echo ('<br>' . $value['body']);
			}
		}
	}
?>
