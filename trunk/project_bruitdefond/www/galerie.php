
<div class="slideshow">
	<ul id="galerie">
	
	<?php 
		$imageFiles = scandir("images/photos");
		foreach ($imageFiles as $image){			
				if(preg_match("!(\.jpg|\.jpeg|\.gif|\.bmp|\.png)$!i",$image)){
					$image = "images/photos/".$image;
					?><li><a href="#"><?php echo afficheImage($image, 325, null);?></a></li>
					<?php
				}
		}
	?>
	
	</ul>
</div>

