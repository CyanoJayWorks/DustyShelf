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
        
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
    	<?php 
    		include 'header.php';
			include 'body.php';
			include 'sidebar.php';
			include 'footer.php';
    	?>
    </body>
</html>