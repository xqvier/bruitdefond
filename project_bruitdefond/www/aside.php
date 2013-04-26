<aside>
	<div>
		<h1>Playlist</h1>		
		<?php 
			$mp3Files = scandir("mp3");
			
			foreach ( $mp3Files as $mp3){
				if($mp3 != "." && $mp3 != ".."){
					echo explode(".",$mp3)[0];
					$mp3 = "mp3/".$mp3;
					
					?>
					<br />
					<audio controls>
						<source src="<?php echo $mp3; ?>" type="audio/mpeg">
						Votre navigateur ne supporte pas le HTML5 et vous ne pouvez donc pas profiter de la super playlist !!	
					</audio>	
					<br />			
					<?php				
				}
			}
		?>
	</div>
	<div class="slideshow">
		<h1>Diaporama</h1>
		<ul><?php 
				$imageFiles = scandir("images/photos");
				foreach ($imageFiles as $image){
					if($image != "." && $image != ".." && $image != "Thumbs.db"){	
						$image = "images/photos/".$image;
						?><li><img src="<?php echo $image; ?>" /></li><?php
					}
				}
			?></ul>
	</div>
	<div>
		<h1>Dates</h1>
	</div>
</aside>