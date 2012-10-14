<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
        	<?php
        		$title = Config::get('blogTitle');
				echo $title;
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