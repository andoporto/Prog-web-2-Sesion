<? php
	session_start(); //uso la sesion
	if($_session['log'])
		header("Location:login.html");
		
?>