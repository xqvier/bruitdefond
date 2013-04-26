<?php
include ("config.php");
include ("database.php");
?>
<html>
<head>

</head>
<body>
<?php
include ("header.php");
include ("nav.php");
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
include ("aside.php");
include ("footer.php");

?>
</body>



</html>