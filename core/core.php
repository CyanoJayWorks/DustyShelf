<?php
	//echo '<h1 align=center>Welcome to DustyShelf!</h1>';
	
	require(DS_PATH . '/core/env_check.php');
	require(DS_PATH . '/core/autoloader.php');
	
	spl_autoload_register('dustyshelf_class_autoload');
	
	if(!Config::hasKeys(array('mysql_user',
						  'mysql_pass',
					      'mysql_host', 
					      'mysql_port'))) {
					      	
		if(strlen(getenv('MYSQL_HOST')) != 0) {	      		 	
			Config::set('mysql_user', getenv('MYSQL_USERNAME'));
			Config::set('mysql_pass', getenv('MYSQL_PASSWORD'));
			Config::set('mysql_host', getenv('MYSQL_DB_HOST'));
			Config::set('mysql_port', '3306');
			Config::set('mysql_db', getenv('MYSQL_DB_NAME'));
		} else {
			Config::set('mysql_user', 'root');
			Config::set('mysql_pass', '');
			Config::set('mysql_host', 'localhost');
			Config::set('mysql_port', '3306');
			Config::set('mysql_db', 'dustyshelf');
		}
	}
						  
	echo Config::get('mysql_host');
	
	DB::connect(Config::get('mysql_host'), Config::get('mysql_user'), Config::get('mysql_pass'));
	DB::selectDatabase(Config::get('mysql_db'));
	
	//BlogInfo::refreshInfo();
	
	loadOthers();
	
	require_once(DS_PATH . '/core/includes/view.php');
	
	DB::close();
	//$indexController = new IndexController();
	//$indexController->invokeController();
?>
