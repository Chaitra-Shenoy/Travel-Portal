<?php
	session_start();
	session_unset();
	header('Location:admin-login.php');
?>