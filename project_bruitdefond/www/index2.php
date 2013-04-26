<?php
include("config.php");
include("database.php");
include ("tools.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<?php
			include ("header.php");
			include ("nav.php");
		?>
		<section>
		<?php
			if(isset($_GET['p'])){
				if($_GET['p'] == "galerie"){
					include("galerie.php");
				} else if ($_GET['p'] == "boutique"){
					include ("boutique.php");
				} else if ($_GET['p'] == "video"){
					include ("video.php");
				} else if ($_GET['p'] == "duo"){
					include ("duo.php");
				} else if ($_GET['p'] == "contact"){
					include ("contact.php");
				} else {
					include("error404.php");
				}				
			} else{
				include("accueil.php");
			}
		?>
		</section>
		<?php
		include ("aside.php");
		include ("footer.php");

		?>
	</body
</html>