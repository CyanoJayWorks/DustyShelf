<?php
    class MasterView extends AbstractView {
		function __construct() {
			
		}
		
		public function showView(array $data) {
			echo 'Master View Shown</br>';
			
		    foreach ($data as $key => $value) {
				echo ('<br>' . $value['body']);
			}
		}
	}
?>
