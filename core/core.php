<?php

	require(DS_PATH . '/core/env_check.php');
	require(DS_PATH . '/core/autoloader.php');
	
	spl_autoload_register('dustyshelf_class_autoload');
	
	if(!Config::hasKeys(array('mysql_user',
						  'mysql_pass',
					      'mysql_host', 
					      'mysql_port'))) {

		Config::set('mysql_user', getenv('MYSQL_USERNAME'));
		Config::set('mysql_pass', getenv('MYSQL_PASSWORD'));
		Config::set('mysql_host', getenv('MYSQL_DB_HOST'));
		Config::set('mysql_port', '3306');
		Config::set('mysql_db', getenv('MYSQL_DB_NAME'));
	}
	
	DB::connect(Config::get('mysql_host'), Config::get('mysql_user'), Config::get('mysql_pass'));
	DB::selectDatabase(Config::get('mysql_db'));
	
	//loadOthers();
	
	
	if(!isset($_GET['c']) || !isset($_GET['a']))  {
		Feedback::do404();
	} else {
	
		$controller = $_GET['c'];
		$action = $_GET['a'];
		$args = isset($_GET['i']) ? $_GET['i'] : '';
		
		echo 'controller: ' . $controller . '<br />';
		echo 'action: ' . $action . '<br />';
		echo 'arguments: ' . $args . '<br />';
		
		if($controller == 'blogtest')  {
			require_once(DS_PATH . '/core/includes/view.php');
			die();
		}
		
		Router::doRouting($controller, $action, $args);
	}
	
	//require_once(DS_PATH . '/core/includes/view.php');
	
	DB::close();
?>
