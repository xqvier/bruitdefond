	<div class="slideshow">
	<ul id="galerie">
	
	<?php 
		$imageFiles = scandir("images/photos");
		foreach ($imageFiles as $image){			
				if($image != "." && $image != ".." && $image != "Thumbs.db"){	
					$image = "images/photos/".$image;
					?><li><a href="#"><?php echo afficheImage($image, null, 180);?></a></li>
					<?php
				}
		}
	?>
	
	</ul>
	</div>	
</div>
