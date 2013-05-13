<div>
	<?php
	$videos = getVideo();
		mysqli_data_seek($videos, 0);
		while(($video = mysqli_fetch_object($videos)) != NULL){
			?>		
			<article class="video">
				<h1><datetime><?php echo date_format(date_create($video->timestamp), $FORMAT_DATE); ?></datetime><?php echo $video->title; ?></h1>
				<div><iframe width="420" height="315" src="http://www.youtube.com/embed/<?php echo $video->link; ?>" frameborder="0" allowfullscreen></iframe></div>
			</article>
			
			<?php
		}
	?>
</div>
