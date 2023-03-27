<?php 
	include "conexion.php";

Eliminar($_GET['email']);

function Eliminar($email_persona)
{
	//aqui se estan borrando todas las personas que tienen como llave primaria cc se borran de todas las tablas
	include "conexion.php";
	
	$a="DELETE FROM prestamos WHERE email= '".$email_persona."'   ";
    $resulto= mysqli_query($conn,$a) ; 

	$eliminar="DELETE FROM usuarios WHERE email= '".$email_persona."'   ";
    $resulto= mysqli_query($conn,$eliminar) ; 




}

 	echo '<script>alert("eliminado exitosamente "); window.location="tablaDatos.php"</script>';

?>
   