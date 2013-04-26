<?php
if(isset($_GET['action'])){

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
</form>

