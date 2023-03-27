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
 

    $instrumentosNombre =$_POST["instrumentosNombre"];
    $existencia=$_POST["existencia"];
    


			//nombres de los campos en las tablas;
$sql = "INSERT INTO instrumento (instrumentosNombre,existencia) VALUES ('$instrumentosNombre','$existencia');";


if (mysqli_multi_query($con, $sql)) {
  //echo "SE AÑADIERON NUEVOS DATOS A LA TABLA";
  echo '<script>alert("los datos ingresaron :)"); window.location="tablainstrumentios.php"</script>';
} 
else {
  echo '<script>alert("Algo salio mal el instrumento ingresado ya esta resitrado :(");window.location="tablainstrumentios.php" </script>';
 //echo "Error ALGO PASO: " . $sql . "<br>" . mysqli_error($conn);// window.location="tablainstrumentios.php";
}

mysqli_close($con);
 ?>