<?php 
	include "conexion.php";

Eliminar($_GET['instrumentosNombre']);

function Eliminar($id_instu)
{
	//aqui se estan borrando todas las personas que tienen como llave primaria cc se borran de todas las tablas
	include "conexion.php";
	$a="DELETE FROM prestamos WHERE instrumentosNombre= '".$id_instu."'   ";
    $resulto= mysqli_query($conn,$a) ; 

	$eliminar="DELETE FROM instrumento WHERE instrumentosNombre= '".$id_instu."'   ";
    $resulto= mysqli_query($conn,$eliminar) ; 




}

 	echo '<script>alert("eliminado exitosamente "); window.location="tablainstrumentios.php"</script>';

?>
   