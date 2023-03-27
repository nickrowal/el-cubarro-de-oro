<?php 
	include "conexion.php";
  
    $id_prestamo =$_POST["id_prestamo"];
    $instrumentosNombre=$_POST["instrumentosNombre"];
	  $email =$_POST["email"];
	  $fechaPeticion= $_POST["fechaPeticion"];
    $proceso= $_POST["proceso"];
    $fechaValidacion= $_POST["fechaValidacion"];
		
		

$sql= "UPDATE prestamos set  instrumentosNombre='$instrumentosNombre', email='$email', fechaPeticion='$fechaPeticion', proceso='$proceso', fechaValidacion='$fechaValidacion' where id_prestamo='$id_prestamo'";
$consulta2= "UPDATE instrumento set existencia =existencia-1  where instrumentosNombre='$instrumentosNombre'";
//update instrumentos set existencia =existencia-1 where instrumentosNombre =1;	

if(mysqli_multi_query($conn, $consulta2)) {
     if (mysqli_multi_query($conn, $sql)) {
      echo '<script>alert("los datos actualizaron :)"); window.location="tablaPrestamos.php"</script>';
  //echo "SE AÑADIERON NUEVOS DATOS A LA TABLA";
} 
else {
  echo "Error ALGO PASO: " . $sql . "<br>" . mysqli_error($conn);
}


}else{
  echo "Error ALGO PASO: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
 ?>
