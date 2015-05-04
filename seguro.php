<?php
	session_start(); //uso la sesion
	if($_SESSION['log'])
		header("Location:verificar.php");
		
?>