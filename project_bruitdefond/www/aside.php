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
					if(preg_match("!(\.jpg|\.jpeg|\.gif|\.bmp|\.png)$!i",$image)){
						$image = "images/photos/".$image;
						?><li><?php afficheImage($image, 250, null); ?></li><?php
					}
				}
			?></ul>
	</div>
	<div>
		<h1>Dates</h1>		
		<ul>
			<?php $dates = getFuturesDates();
				while(($date = mysqli_fetch_object($dates)) != NULL){
					?>
					<li><datetime><?php echo date_format(date_create($date->day), $FORMAT_DATE); ?></datetime> : <?php echo $date->title; ?><br /><?php echo $date->place; ?></li>
					<?php
				}
			?>
			
		</ul>
	</div>
</aside>