<?php
	if (!defined('DS_PATH')) {
		define('DS_PATH', dirname(__FILE__));
	}
	
	/**
	 * Apache URL Rewrite Settings:
	 * ==============================
	 * <Directory "YOUR DOCUMENT ROOT DIRECTORY HERE">
		     RewriteEngine On
		     RewriteCond $1 !\.(js|ico|gif|jpg|png|css|html|swf|mp3|wav|txt)$
		     RewriteRule ^([A-Za-z0-9]+)/([A-Za-z0-9]+)/([A-Za-z0-9]*)?$ /PATH/TO/blog.php?c=$1&a=$2&i=$3 [NC,L] 
	   </Directory>
	 * ==============================
	 */
	
	echo 'controller: ' . $_GET['c'] . '<br />';
	echo 'action: ' . $_GET['a'] . '<br />';
	echo 'input: ' . $_GET['i'] . '<br />';
	
	require(DS_PATH . '/core/core.php');
?>
