<div>
	<?php
	$videos = getVideo();
		mysqli_data_seek($videos, 0);
		while(($video = mysqli_fetch_object($videos)) != NULL){
			?>		
			<article>
				<datetime><?php echo date_format(date_create($video->timestamp), $FORMAT_DATE); ?></datetime> : <?php echo $video->title; ?>
				<iframe width="420" height="315" src="<?php echo $video->link; ?>" frameborder="0" allowfullscreen></iframe>
			</article>
			
			<?php
		}
	?>
</div>
