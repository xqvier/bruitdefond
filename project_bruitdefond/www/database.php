<?php
// Connection à la base de données
$GLOBALS['db'] = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME, $DATABASE_PORT);

mysqli_set_charset($GLOBALS['db'], "utf8");
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

function getFuturesDates(){
	$query = "SELECT * FROM dates WHERE day >= CURRENT_TIMESTAMP ORDER BY day";
	
	return mysqli_query($GLOBALS['db'], $query);
}

function getDates(){
	$query = "SELECT * FROM dates ORDER BY day";
	
	return mysqli_query($GLOBALS['db'], $query);
	
}

function getDate2($id){	
	$query = "SELECT * FROM dates WHERE id = '".$id."'";
	
	return mysqli_fetch_object(mysqli_query($GLOBALS['db'], $query));
}

function deleteDate($id) {
	$query = "DELETE FROM dates WHERE id = '".$id."'";
	
	mysqli_query($GLOBALS['db'], $query);
}

function addDate($day, $title, $place) {
	$query = "INSERT INTO dates (day, title, place) VALUES('".$day."', '".$title."', '".$place."')";

	mysqli_query($GLOBALS['db'], $query);
}

function editDate($id, $day, $title, $place) {
	$query = "UPDATE news SET title='".$title."', place='".$place."', day = '".$day."' WHERE id = '".$id."'";
	
	mysqli_query($GLOBALS['db'], $query);
}



function getRecentesActualites(){
	$query = "SELECT * FROM news ORDER BY timestamp LIMIT 0, 10";
	
	return mysqli_query($GLOBALS['db'], $query);
}

function getActualites(){
	$query = "SELECT * FROM news ORDER BY timestamp";
	
	return mysqli_query($GLOBALS['db'], $query);
	
}

function getActualite($id){	
	$query = "SELECT * FROM news WHERE id = '".$id."'";
	
	return mysqli_fetch_object(mysqli_query($GLOBALS['db'], $query));
}

function deleteActualite($id) {
	$query = "DELETE FROM news WHERE id = '".$id."'";
	
	mysqli_query($GLOBALS['db'], $query);
}

function addActualite($timestamp, $title, $content) {
	$query = "INSERT INTO news (timestamp, title, content) VALUES('".$timestamp."', '".$title."', '".$content."')";

	mysqli_query($GLOBALS['db'], $query);
}

function editActualite($id, $timestamp, $title, $content) {
	$query = "UPDATE news SET timestamp = '".$timestamp."', title='".$title."', content='".$content."' WHERE id = '".$id."'";
	
	mysqli_query($GLOBALS['db'], $query);
}




?>

