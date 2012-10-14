<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
        	<?php
        		echo Config::get('blog_nav_title');
        	?>
        </title>
        <meta name="description" content="">
        
        <link rel="stylesheet" type="text/css" href="./core/includes/style.css"/>
    </head>
    <body>
    	<?php 
    		include_once 'header.php';
			include_once 'body.php';
			include_once 'sidebar.php';
			include_once 'footer.php';
    	?>
    </body>
</html>