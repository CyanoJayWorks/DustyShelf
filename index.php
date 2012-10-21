<?php
	if (!defined('DS_PATH')) {
		define('DS_PATH', dirname(__FILE__));
	}
	
	/**
	 * Apache URL Rewrite Settings (place in .htaccess in DustyShelf root folder):
	 * ==============================
	 * <IfModule mod_rewrite.c>
			RewriteEngine On
			RewriteBase /
			RewriteCond %{REQUEST_FILENAME} !-f
			RewriteCond %{REQUEST_FILENAME} !-d
			RewriteCond $1 !\.(js|ico|gif|jpg|png|css|html|swf|mp3|wav|txt)$
			RewriteRule ^([A-Za-z0-9]+)/([A-Za-z0-9]+)/([A-Za-z0-9-\/]*)?$ index.php?c=$1&a=$2&i=$3 [NC,L] 
		</IfModule>
		<IfModule !mod_rewrite.c>
		    ErrorDocument 404 /index.php
		</IfModule>
	 * ==============================
	 */
	
	echo 'controller: ' . $_GET['c'] . '<br />';
	echo 'action: ' . $_GET['a'] . '<br />';
	echo 'input: ' . $_GET['i'] . '<br />';
	
	require(DS_PATH . '/core/core.php');
?>
