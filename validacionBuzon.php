<?php 
	include "conexion.php";
        $id_sugerencia=$_POST["id_sugerencia"];
		$email= $_POST["email"];
        $sugerencia=$_POST["sugerencia"];
		$respuesta= $_POST["respuesta"];

$sql= "UPDATE buzonsugerencias set  id_sugerencia='$id_sugerencia', email='$email', sugerencia='$sugerencia' , respuesta='$respuesta' where id_sugerencia='$id_sugerencia'";

if (mysqli_multi_query($conn, $sql)) {
    echo '<script>alert("los datos actualizaron :)"); window.location="buzonsugerencias.php"</script>';
  //echo "SE AÑADIERON NUEVOS DATOS A LA TABLA";

} 
else {
  echo "Error ALGO PASO: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?>

