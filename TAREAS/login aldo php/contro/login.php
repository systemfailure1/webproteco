<?php 

	require_once './../conex/conexiones.php';

	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$login_query = "SELECT * FROM users WHERE user='".$user."' AND pass='".md5($pass)."'";

	if(mysqli_fetch_assoc($conexion->query($login_query)))
	{
		$_SESSION['user']=$user;

		echo "Hola ".$user;
	}

 ?>