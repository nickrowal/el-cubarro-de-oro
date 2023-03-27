<?php 
include "cone.php";
session_start();

error_reporting(0);
$usuario =$_SESSION['id'] ;

$varsesion=$_SESSION['id'] ;
if($varsesion==NULL || $varsesion==""){
  echo "no estais autorizado";
  die();
}


if (isset($_SESSION['id'])) {
  
}else{
  ?>
  <script type="text/javascript">
    //window.location = "./";
  </script>
  <?php 
}
$id = $_SESSION['id'];
$consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$id';");
$valores = mysqli_fetch_array($consulta);
$nombre = $valores['nombre'];
$email = $valores['email'];
$foto = $valores['foto'];
 







    $nombre =$_POST["nombre"];
		$apellido= $_POST["apellido"];
		$Identificacion=$_POST["Identificacion"];
			$foto =$_POST["foto"];
    $edad =$_POST["edad"];
    $grado=$_POST["grado"];
    $email =$_POST["email"];
		$psw =$_POST["psw"];
		$id_cargo =$_POST["id_cargo"];
    


			//nombres de los campos en las tablas;
$sql = "INSERT INTO usuarios (nombre,apellido,Identificacion,foto,edad,grado,email,psw,id_cargo) VALUES ('$nombre','$apellido','$Identificacion','$foto','$edad','$grado','$email','$psw','$id_cargo');";


if (mysqli_multi_query($con, $sql)) {
  //echo "SE AÑADIERON NUEVOS DATOS A LA TABLA";
  echo '<script>alert("los datos ingresaron :)"); window.location="tablaDatos.php"</script>';
} 
else {
  echo '<script>alert("Algo salio mal el Correo ingresado ya esta resitrado :("); window.location="tablaDatos.php"</script>';
//  echo "Error ALGO PASO: " . $sql . "<br>" . mysqli_error($conn);

}

mysqli_close($con);
 ?>