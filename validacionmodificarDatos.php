<?php 
	include "conexion.php";

$email=$_POST["email"];
		$nombre =$_POST["nombre"];
		$apellido= $_POST["apellido"];
		$Identificacion =$_POST["Identificacion"];
		$edad=$_POST["edad"];
        $grado=$_POST["grado"];
		

$sql= "UPDATE usuarios set  nombre='$nombre', apellido='$apellido',Identificacion='$Identificacion' ,edad='$edad', grado='$grado' where email='$email'";
	

if (mysqli_multi_query($conn, $sql)) {
	echo '<script>window.location="tablaDatos.php"</script>';
  //echo "SE AÑADIERON NUEVOS DATOS A LA TABLA";

} 
else {
  echo "Error ALGO PASO: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?>



