<?php
	$usuario = $_POST["name"];
	$contra = $_POST["password"];
	$correo = $_POST["email"];
	
	if(($usuario != "") && (%contra != "") ){
		if((strcpm($usuario,"usuario1")==0) && (strcmp($contra,"contraseña1") == 0)){
			header("Location: yes.html");
		}
		else
			header("Location: no.html");
	}
	else
		header("Location: no.html");

?>
