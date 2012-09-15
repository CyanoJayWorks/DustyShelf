<?php
    class MasterModel extends AbstractModel {
		private $masterView = null;
		
		function __construct() {
			$this->masterView = new MasterView();
			
			Config::set('mysql_user', 'root');
			Config::set('mysql_pass', '');
			Config::set('mysql_host', 'localhost');
			Config::set('mysql_port', '3306');
		}
		
		public function invokeModel() {
			echo 'Master Model Invoked</br>';
			
			DB::connect(Config::get('mysql_host'), Config::get('mysql_user'), Config::get('mysql_pass'));
			
			DB::selectDataBase('dustyshelf');
			$results = DB::executeResultQuery('SELECT body FROM blog_posts');
			
			DB::close();
			
			foreach ($results as $key => $value) {
				echo ('<br>' . $value['body']);
			}
			
			$this->masterView->showView(array());
		}
	}
?>
