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
			<a href="<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; echo $url;?>"> 
				<?php echo Config::get('blog_title') ?>
			</a>
			
			<h4><?php echo Config::get('blog_title_desc') ?></h4>
			<img src="<?php echo Config::get('blog_header_img') ?>" href="<?php echo Config::get('blog_header_img') ?>"/>
		</div>
		
		<div id="content">
			<div class="blogbody">
				<?php
					$results = DB::executeResultQuery('SELECT body,title,tags FROM posts');
					
					foreach ($results as $key => $value) {
						echo '<div class="blogpost">';
						echo '<h4>' . $value['title'] . '</h4>'; 
						echo $value['tags'] . '<hr />';
						echo $value['body'];
						echo '</div>';
					}
				?>
			</div>
			
			<div class="sidebar">
				<?php
					echo Config::get('blog_desc'); 
				?>
			</div>
		</div>
		
		<div class="footer">
			<hr />
			<p> <?php echo Config::get('blog_cpyrt'); ?></p>
		</div>

    </body>
</html>