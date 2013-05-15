<?php
	if(isset($_GET['logout'])) {
		session_destroy();
		session_start();
	}
	if(!isset($_SESSION['user']) && isset($_POST['pwd'])) {
		$passwd = file("admin/passwd")[0];
		if($_POST['pwd'] == $passwd){
			$_SESSION['user'] = "admin";
		} else {
			$_SESSION['wrongPassword'] = true;
		}
	}
?>