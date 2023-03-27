<?php
session_start();
	error_reporting(0);
	$usuario =$_SESSION['id'] ;
	
	$varsesion=$_SESSION['id'] ;
	if($varsesion==NULL || $varsesion==""){
		header('Location: menu/Ingresar.html');
		die();
	}
session_unset();
session_destroy();
header('Location: menu/Ingresar.html');
?>