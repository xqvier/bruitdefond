<?php
// Connection à la base de données
$GLOBALS['db'] = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME, $DATABASE_PORT);

mysqli_set_charset($GLOBALS['db'], "utf8");
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

function getFuturesDates(){
	$query = "SELECT * FROM dates WHERE day >= CURRENT_TIMESTAMP";
	
	return mysqli_query($GLOBALS['db'], $query);
}





?>

