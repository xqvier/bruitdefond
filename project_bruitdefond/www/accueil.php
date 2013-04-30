<?php 
	$news = getRecentesActualites();
?>
<p>
	Bruit de Fond, c'est la rencontre entre une chanteuse (Sylvy) et un guitariste chanteur (Pat), qui ont réuni leur passion de la musique pour vous proposer un duo acoustique.
</p>
<ul>
	<?php
		while(($new = mysqli_fetch_object($news)) != NULL){
			?>		
			<li><a href="#<?php echo $new->timestamp; ?>"><datetime><?php echo date_format(date_create($new->timestamp), $FORMAT_DATE); ?></datetime> : <?php echo $new->title; ?></a></li>
			<?php
		}
	?>
</ul>
<div>
	<?php
		mysqli_data_seek($news, 0);
		while(($new = mysqli_fetch_object($news)) != NULL){
			?>		
			<article id="<?php $new->timestamp; ?>">
				<datetime><?php echo date_format(date_create($new->timestamp), $FORMAT_DATE); ?></datetime> - <?php echo $new->title; ?><br />
				<p><?php echo $new->content; ?></p>
			</article>
			<?php
		}
	?>
</div>