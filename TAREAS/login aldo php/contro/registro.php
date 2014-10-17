<?php 
	require_once './../conex/conexiones.php';

	$registro_query = "INSERT INTO  users(user,pass,mail) VALUES(
		'".$_POST['user']."',
		'".md5($_POST['pass'])."',
		'".$_POST['email']."'
		)";


	$registro_object = $conexion->query($registro_query);

	echo "Usuario registrado";

	header("Location: ./../index.php");
 ?>