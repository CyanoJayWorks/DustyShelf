<?php
    if (!defined('DS_PATH')) {
		header( 'HTTP/1.1 403 Forbidden', true, 403);
		die();
	}

	if (!version_compare( PHP_VERSION, '5.3.0', '>=')) {
		die('DustyShelf needs PHP 5.3.x or higher to run. You are currently running PHP ' . PHP_VERSION . '.');
	}
?>