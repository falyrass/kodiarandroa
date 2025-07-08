<?php
	session_start();
	unset($_SESSION['pseudo_admin']);
	unset($_SESSION['passwd_admin']);
	session_destroy();
	header("location:index.php?compte déconnécté.");
?>