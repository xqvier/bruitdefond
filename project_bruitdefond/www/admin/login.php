<h1>Identification</h1>
<?php if(isset($_SESSION['wrongPassword'])){ echo "Mauvais mot de passe ! <br />"; } ?>
<form action="?p=admin" method="post">
	Mot de passe : <input type="password" name="pwd"/><button type="submit" >Se connecter</button>
</form>