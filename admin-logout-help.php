<?php
	session_start();
	session_unset();
	header('Location:admin-help-login.php');
?>