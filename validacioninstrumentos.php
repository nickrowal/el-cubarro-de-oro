<?php 
	include "conexion.php";
    $instrumentosNombre=$_POST["instrumentosNombre"];
		$existencia= $_POST["existencia"];

$sql= "UPDATE instrumento set  instrumentosNombre='$instrumentosNombre', existencia='$existencia' where instrumentosNombre='$instrumentosNombre'";

if (mysqli_multi_query($conn, $sql)) {
    echo '<script>alert("los datos actualizaron :)"); window.location="tablainstrumentios.php"</script>';
  //echo "SE AÑADIERON NUEVOS DATOS A LA TABLA";

} 
else {
  echo "Error ALGO PASO: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?>
