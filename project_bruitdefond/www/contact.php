<?php
if(isset($_REQUEST['action'])){
	ini_set("SMTP", $SMTP_SERVER);
	ini_set("smtp_port", $SMTP_PORT);
	ini_set("sendmail_from", $SENDER_MAIL);
	
	$mail = $_REQUEST['mail'];
	$sender = $SENDER_MAIL;
	$to = $CONTACT_MAIL;
	
	$objet = $_REQUEST['objet'];
	$corpmail = $_REQUEST['corpmail']."\r\n".$_REQUEST['tel']."\r\n".$mail;
	mail($to,$objet,$corpmail,"From:" . $mail);
}
?>
<h1>Contact</h1>
<address>
Sylvy<br />
06 95 67 03 45<br />
</address>
<address>
Pat<br>
06 64 82 05 85<br />
</address>
<address>
	<a title="Mail de contact" href="mailto:<?php echo $CONTACT_MAIL; ?>"><?php echo $CONTACT_MAIL; ?></a><br />
	<a title="Notre page Facebook" href="<?php echo $FACEBOOK_PAGE;?>">Facebook</a>
</address>
<br />
Ou envoyer un message via le formulaire ci-dessous :<br /><br />

<form method="post" action="?p=contact&action=send">
<label>Votre adresse Mail :</label><input type="email" name="mail"><br />
<label>Votre Tél :</label><input type="tel" name="tel"><br />
<label>Objet de votre message :</label><input type="text" name="objet"><br />
<label>Votre message :</label><textarea name="corpmail"></textarea><br />
<button type="submit">Envoyer</button>
</form>


