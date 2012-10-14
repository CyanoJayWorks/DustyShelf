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
    	
	    <div class="header">
			<h2><?php echo Config::get('blog_title') ?></h2>
			<h4><?php echo Config::get('blog_title_desc') ?></h4>
			<img src="./core/assets/FBCover.jpg" />
		</div>
		
		<div class="blogbody">
			<?php
				DB::selectDatabase('dustyshelf');
				$results = DB::executeResultQuery('SELECT body FROM posts');
				
				foreach ($results as $key => $value) {
					echo '<div class="blogpost">';
					echo '<br>' . $value['body'];
					echo '</div>';
				}
			?>
		</div>
		
		<div class="sidebar">
			
		</div>
		
		<div class="footer">
			<hr />
			<p> <?php echo Config::get('blog_cpyrt'); ?></p>
		</div>

    </body>
</html>