<?php
    class MasterModel extends AbstractModel {
		private $masterView = null;
		
		function __construct() {
			$this->masterView = new MasterView();
		}
		
		public function invokeModel() {
			echo 'Master Model Invoked</br>';
			$this->masterView->showView();
		}
	}
?>