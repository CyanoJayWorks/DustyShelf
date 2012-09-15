<?php
	class MasterController extends AbstractController {
		private $masterModel = null;
		
		function __construct() {
			$this->masterModel = new MasterModel();
		}
		
		public function invokeController() {
			echo 'Master Controller Invoked</br>';
			$this->masterModel->invokeModel();
		}
	}
?>
