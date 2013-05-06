<?php
	if(isset($_GET['action']) && $_GET['action'] == "add" && !isset($_GET['confirm'])){
		// page d'edition(/ajout)
		$video = NULL;
		if ($_GET['action'] == "add") {
				// Validation de l'ajout
				addVideo($_POST['date'], $_POST['title'], $_POST['link']);
			}
			if($_GET['action'] == "delete") {
				deleteVideo($_GET['id']);
			}
		}
		$videos = getVideo();
		// front page
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
			<td><datetime><?php echo date_format(date_create($video->date), $FORMAT_DATE); ?></datetime></td>
			<td><?php echo $video->title; ?></td>
			<td><a href="?p=admin&a=video_admin&action=delete&id=<?php echo $video->id; ?>">x</a>
		</tr>
		<?php } ?>
	</tbody>	
</table>
<a href="?p=admin&a=video_admin&action=add">Ajouter une Vidéo</a>
