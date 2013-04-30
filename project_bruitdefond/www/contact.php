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
	/*require ( "./phpMailer/class.smtp.php"); 
	require ( "./phpMailer/class.phpmailer.php"); 

	$to = "julian.durroux@gmail.com"; 
	global $db, $mybb; 
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; // enable SMTP authentication 
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier 
	$mail->Host = "smtp.gmail.com"; 
	$mail->Port = 465; // set the SMTP port 

	$mail->Username = "julian.durroux@gmail.com"; // GMail username (including @gmail.com) 
	$mail->Password = "mdp"; // GMail password 

	$mail->From = $_REQUEST['mail']; 
	$mail->FromName = "toto"; 
	$mail->Subject = $_REQUEST['objet']; 
	$mail->Body = $_REQUEST['corpmail'] . $_REQUEST['tel']; 
	$mail->AddAddress($to, ""); 

	if(!$mail->Send()) 
	{ 
	echo "Une erreur c'est produite lors de l'envoi vers  ".$to." avec l'erreur : ".$mail->ErrorInfo; 
	$mail->ClearAddresses(); 
	} */
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
<?php
echo $CONTACT_MAIL ."<br />"
?>
<a title="Notre page Facebook" href="<?php echo $FACEBOOK_PAGE;?>">Facebook</a>
<br>Ou envoyer un message via le formulaire ci-dessous</br>

<form method="post" action="index2.php?p=contact&action=send">
Votre Mail: <input type="email" name="mail">
Votre Tél: <input type="tel" name="tel">
Objet de votre message: <input type="text" name="objet">
Votre message: <textarea name="corpmail"></textarea>
<button type="submit">Envoyer</button>
</form>


