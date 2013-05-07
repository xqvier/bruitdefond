<?php
	if(isset($_GET['action']) && ($_GET['action'] == "edit" || $_GET['action'] == "add") && !isset($_GET['confirm'])){
		// page d'edition(/ajout)
		$date = NULL;
		if($_GET['action'] == "edit") {
			$date = getDate2($_GET['id']);
		}
		?>
		<form action="?p=admin&a=dates&action=<?php echo $_GET['action']; ?>&confirm" method="post">
			<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : "" ; ?>" />
			Date : <input type="datetime-local" name="day" value="<?php echo $date != NULL ? $date->day : "" ; ?>" />
			Titre : <input type="text" name="title" value="<?php echo $date != NULL ? $date->title : "" ; ?>" />
			Location : <input type="text" name="place" value="<?php echo $date != NULL ? $date->place : "" ; ?>" />
			<button type="submit">Soumettre</button>
		</form>
		
		<?php
	} else {
		if(isset($_GET['action'])){			
			if($_GET['action'] == "edit" && isset($_GET['confirm'])) {
				// Validation de l'édition
				editDate($_POST['id'], $_POST['day'], $_POST['title'], $_POST['place']);
			} else if ($_GET['action'] == "add" && isset($_GET['confirm'])) {
				// Validation de l'ajout
				addDate($_POST['day'], $_POST['title'], $_POST['place']);
			}
			if($_GET['action'] == "delete") {
				deleteDate($_GET['id']);
			}
		}
		$dates = getDates();
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
		<?php while(($date = mysqli_fetch_object($dates)) != NULL){ ?>
		<tr>
			<td><datetime><?php echo date_format(date_create($date->day), $FORMAT_DATE); ?></datetime></td>
			<td><?php echo $date->title; ?></td>
			<td><a href="?p=admin&a=dates&action=edit&id=<?php echo $date->id; ?>">v</a>
			<td><a href="?p=admin&a=dates&action=delete&id=<?php echo $date->id; ?>">x</a>
		</tr>
		<?php } ?>
	</tbody>	
</table>
<a href="?p=admin&a=dates&action=add">Ajouter une date</a>
<?php } ?>