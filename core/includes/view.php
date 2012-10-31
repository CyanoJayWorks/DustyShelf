<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
        	<?php
        		BlogInfo::refreshInfo();
        		echo BlogInfo::getBlogNavTitle();
        	?>
        </title>
        <meta name="description" content="">
        
        <link rel="stylesheet" type="text/css" href="/core/includes/style.css"/>
    </head>
    <body>
    	<div id="content">
		    <div class="header">
				<a href="<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; echo $url;?>"> 
					<?php  echo BlogInfo::getBlogTitle(); ?>
				</a>
				
				<p><?php echo BlogInfo::getBlogTitleDescription(); ?></p>
			</div>
			
			<div id="blogcontent">
				<img id="headerimg" src="<?php echo BlogInfo::getBlogHeaderImage(); ?>" href="<?php echo BlogInfo::getBlogHeaderImage(); ?>"/>
				<div class="blogbody">
					<?php
						$results = DB::executeResultQuery('SELECT body,title,tags FROM posts');
						
						foreach ($results as $key => $value) {
							echo '<div class="blogpost">';
							echo '<div class="blogposttitle">';
							echo '<p>' . $value['title'] . '</p>';
							echo '</div>';
							echo '<div class="blogposttag">';
							echo $value['tags'] . '<hr />';
							echo '</div>';
							echo $value['body'];
							echo '</div>';
						}
					?>
				</div>
				
				<div class="sidebar">
					<?php
						echo BlogInfo::getBlogDescription();
					?>
				</div>
			</div>
		</div>
		
		<div class="footer">
			<hr />
			<p> <?php echo BlogInfo::getBlogCopyright(); ?></p>
		</div>
		
    </body>
</html>