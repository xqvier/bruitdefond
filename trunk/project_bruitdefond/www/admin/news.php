<?php
	if(isset($_GET['action']) && ($_GET['action'] == "edit" || $_GET['action'] == "add") && !isset($_GET['confirm'])){
		// page d'edition(/ajout)
		$new = NULL;
		if($_GET['action'] == "edit") {
			$new = getActualite($_GET['id']);
		}
		?>
		<form action="?p=admin&a=news&action=<?php echo $_GET['action']; ?>&confirm" method="post">
			<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : "" ; ?>" />
			<label>Date :</label><input type="datetime-local" name="timestamp" value="<?php echo $new != NULL ? $new->timestamp : "" ; ?>" /><br />
			<label>Titre :</label><input type="text" name="title" value="<?php echo $new != NULL ? $new->title : "" ; ?>" /><br />
			<label>Contenu :</label><textarea name="content"><?php echo $new != NULL ? $new->content : "" ; ?></textarea><br />
			<button type="submit">Soumettre</button>
		</form>
		
		<?php
	} else {
		if(isset($_GET['action'])){			
			if($_GET['action'] == "edit" && isset($_GET['confirm'])) {
				// Validation de l'édition
				editActualite($_POST['id'], $_POST['timestamp'], $_POST['title'], $_POST['content']);
			} else if ($_GET['action'] == "add" && isset($_GET['confirm'])) {
				// Validation de l'ajout
				addActualite($_POST['timestamp'], $_POST['title'], $_POST['content']);
			}
			if($_GET['action'] == "delete") {
				deleteActualite($_GET['id']);
			}
		}
		$news = getActualites();
		// front page
?>
<table>
	<thead>
		<tr>
			<th>Date</th>
			<th>Titre</th>
			<th>Editer</th>
			<th>Supprimer</th>
		</tr>
	</thead>
	<tbody>
		<?php while(($new = mysqli_fetch_object($news)) != NULL){ ?>
		<tr>
			<td><datetime><?php echo date_format(date_create($new->timestamp), $FORMAT_DATE); ?></datetime></td>
			<td><?php echo $new->title; ?></td>
			<td><a href="?p=admin&a=news&action=edit&id=<?php echo $new->id; ?>">v</a>
			<td><a href="?p=admin&a=news&action=delete&id=<?php echo $new->id; ?>">x</a>
		</tr>
		<?php } ?>
	</tbody>	
</table>
<a href="?p=admin&a=news&action=add">Ajouter une actualité</a>
<?php } ?>