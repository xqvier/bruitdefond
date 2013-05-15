<?php 
	$news = getRecentesActualites();
?>
<p class="center">
	Bruit de Fond, c'est la rencontre entre une chanteuse (Sylvy) et un guitariste chanteur (Pat), qui ont réuni leur passion de la musique pour vous proposer un duo accoustique.
</p>
<div id="raccourci">
	<h1>Accès rapide aux News : </h1>
<ul>
	
	<?php
		while(($new = mysqli_fetch_object($news)) != NULL){
			?>		
			<li><a href="#<?php echo $new->id; ?>"><datetime><?php echo date_format(date_create($new->timestamp), $FORMAT_DATE); ?></datetime> : <?php echo $new->title; ?></a></li>
			<?php
		}
	?>
</ul>
</div>
<div>
	<?php
		mysqli_data_seek($news, 0);
		while(($new = mysqli_fetch_object($news)) != NULL){
			?>		

			<article id="<?php echo $new->id; ?>">
				<h1><datetime><?php echo date_format(date_create($new->timestamp), $FORMAT_DATE); ?></datetime><?php echo $new->title; ?></h1>
				<p><?php echo $new->content; ?></p>
			</article>
			<?php
		}
	?>
</div>