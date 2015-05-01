<? php
	$login = $_POST["nombre"]; //nombre de campos
	$clave = $_POST["psw"];
	
	if($clave != "pepe")
	{
		header("Location:index.html"); //escribe la cabecera de respuesta, antes del html, error 300 "redirigite al location.login.html"
	}
	else
	{	
		session_start();
		$_SESSION["log"]=1; //variable de session, con 1 la sesion esta abierta
		header("Location: seguro.php"); //session exitosa
	}	
	
?>	



