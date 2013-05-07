<?php
	if(isset($_GET['action']) && $_GET['action'] == "add" && !isset($_GET['confirm'])){
		// page d'edition(/ajout)
		$video = NULL;
		
			?>
		<form action="?p=admin&a=video_admin&action=<?php echo $_GET['action']; ?>&confirm" method="post">
			<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : "" ; ?>" />
			Date  : <input type="datetime-local" name="timestamp" value="<?php echo $video != NULL ? $date->timestamp : "" ; ?>" />
			Titre : <input type="text" name="title" value="<?php echo $video != NULL ? $date->title : "" ; ?>" />
			Lien  : <input type="text" name="link" value="<?php echo $video != NULL ? $date->link : "" ; ?>" />
			<button type="submit">Soumettre</button>
		</form>
		
		<?php
		
		
	} else {
		if(isset($_GET['action'])){
				// Validation de l'ajout
			if ($_GET['action'] == "add" && isset($_GET['confirm'])) {
				$link = $_POST['link'];
				echo $link;
				$link = explode("?", $link)[1];
				$array = explode("&", $link);
				
				foreach ($array as $value){
					if(substr($value, 0 , 2) == "v=") {
						$link = substr($value, 2, strlen($value) -1);
					}
				}
				
				echo $link;
				
				addVideo($_POST['timestamp'], $_POST['title'], $_POST['link']);
			}	
		if($_GET['action'] == "delete") {
				deleteVideo($_GET['id']);
		}
	}
	$videos = getVideo();
	
?>
<table>
	<thead>
		<tr>
			<th>Date</th>
			<th>Titre</th>
			<th>Supprimer</th>
		</tr>
	</thead>
	<tbody>
		<?php while(($video = mysqli_fetch_object($videos)) != NULL){ ?>
		<tr>
			<td><datetime><?php echo date_format(date_create($video->timestamp), $FORMAT_DATE); ?></datetime></td>
			<td><?php echo $video->title; ?></td>
			<td><a href="?p=admin&a=video_admin&action=delete&id=<?php echo $video->id; ?>">x</a>
		</tr>
		<?php } ?>
	</tbody>	
</table>
<a href="?p=admin&a=video_admin&action=add">Ajouter une Vidéo</a>
<?php } ?>
