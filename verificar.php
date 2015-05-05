<?php
	session_start();
	$login = $_POST["nombre"]; //nombre de campos
	$clave = $_POST["psw"];
	
	if($clave != "pepe")
	{
		header("Location:index.php"); //escribe la cabecera de respuesta, antes del html, error 300 "redirigite al location.login.html"
	}
	else
	{	
		
		$_SESSION["log"]=1; //variable de session, con 1 la sesion esta abierta
		//header("Location: seguro.php"); //session exitosa
		echo "usted inicio sesion correctamente";
	}	
?>	



